<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location: ./index.php');
        exit;
    }
    session_start();
    
    $status=false;
    
    if(isset($_SESSION['nombre_usuario'])){
        $status=true;
        $user=$_SESSION['nombre_usuario'];
    }

?>
