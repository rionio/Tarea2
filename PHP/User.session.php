<?php
require './BDconexion.php'; //file conexion
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: ./index.php');
    exit;
}

$conn = CConexion::ConexionBD();
session_start();
$email=$_POST['_email']; //extraxion de info del login
$pass=$_POST['_password'];

$query=<<<SQL
SELECT * FROM cuenta WHERE "Email"= $1 AND "Contraseña"=$2
SQL; //consulta base de datos
$consulta=pg_prepare($conn,"Validation",$query);
$consulta=pg_execute($conn,"Validation",array($email,$pass));
$cantidad=pg_num_rows($consulta);
$datos=pg_fetch_row($consulta);
if($cantidad>0){
    $_SESSION['nombre_usuario']=$datos[1];
    $_SESSION['ROL']= $datos[2];
    $_SESSION['email']= $datos[0];
    $_SESSION['contraseña']= $datos[4];
    $_SESSION['img']=$datos[5];
    header("location: index.php"); //redireccion 
}else{
    session_destroy();
    echo('
        <script language="javascript">
            alert("Email y/o Contraseña erroneas, vuelva a intentar");
            window.location = "./UserSignIn.php";  
        </script>
    ');
}

?>