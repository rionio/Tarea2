<?php
require './BDconexion.php'; //file conexion
$conn = CConexion::ConexionBD();
$user=$_POST['_username'];
$email=$_POST['_email'];
$date=$_POST['_date'];
$rol=$_POST['_rol'];
$pass=$_POST['_password'];

$query=<<<SQL
INSERT INTO cuenta(
"Email", "Nombre", "ROL", "Fecha de nacimiento", "Contraseña")
VALUES ($1, $2, $3, $4, $5)
SQL;
$registro=pg_prepare($conn,"Register",$query);
$registro=pg_execute($conn,"Register",array($email,$user,$rol,$date,$pass));
?>