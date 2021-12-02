<?php  //file para dar bienvenida (y para probar que tiene exito)
session_start();
$usuario=$_SESSION['nombre_usuario'];
echo "<h1>welcome $usuario</h1>";
echo "<a href='salir.php'>Salir</a>";
?>