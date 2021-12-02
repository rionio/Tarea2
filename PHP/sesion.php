<?php
require 'conexion.php'; //file conexion
session_start();
$usuario=$_POST['username']; //extraxion de info del login
$clave=$_POST['password'];

$query="SELECT * FROM cuenta WHERE Nombre='$usuario' AND contraseña='$clave'"; //consulta base de datos
$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    $_SESSION['nombre_usuario']=$usuario;
    header("location: ingreso.php"); //redireccion 
}else{
    echo "datos erroneos";
}

?>