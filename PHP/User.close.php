<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: ./index.php');
    exit;
}
session_start();
session_destroy();//cierra sesion
header("location: index.php");
exit();

?>