<?php  //file para dar bienvenida (y para probar que tiene exito)
session_start();
$user=$_SESSION['nombre_usuario'];
echo "<h1>welcome $user</h1>";
echo "<a href='cerrarsesion.php'>Salir</a>";
?>