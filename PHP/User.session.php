<?php
require './BDconexion.php'; //file conexion
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
    header("location: UserIndex.php"); //redireccion 
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