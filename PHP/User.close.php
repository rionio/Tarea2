<?php
session_start();
session_destroy();//cierra sesion
header("location: index.php");
exit();

?>