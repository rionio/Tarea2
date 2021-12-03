<?php
require './BDconexion.php'; //file conexion
$conn = CConexion::ConexionBD();
session_start();
$user=$_POST['_username']; //extraxion de info del login
$pass=$_POST['_password'];

$query=<<<SQL
SELECT * FROM cuenta WHERE "Nombre"= $1 AND "Contraseña"=$2
SQL; //consulta base de datos
$consulta=pg_prepare($conn,"Validation",$query);
$consulta=pg_execute($conn,"Validation",array($user,$pass));
$cantidad=pg_num_rows($consulta);
$rol=pg_fetch_row($consulta);
if($cantidad>0){
    $_SESSION['nombre_usuario']=$user;
    $_SESSION['ROL']= $rol[2];
    header("location: UserIndex.php"); //redireccion 
}else{
    echo "datos erroneos";
}

?>