<?php
require './BDconexion.php'; //file conexion
$conn = CConexion::ConexionBD();
session_start();
$user=$_POST['_username']; //extraxion de info del login
$pass=$_POST['_password'];

$query='SELECT * FROM cuenta WHERE "Nombre"= $1 AND "Contraseña"=$2'; //consulta base de datos
$consulta=pg_prepare($conn,"my_query",$query);
$consulta=pg_execute($conn,"my_query",array($user,$pass));
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    $_SESSION['nombre_usuario']=$user;
    header("location: ingreso.php"); //redireccion 
}else{
    echo "datos erroneos";
}

?>