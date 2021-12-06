<?php
    session_start();
    
    $status=false;
    
    if(isset($_SESSION['nombre_usuario'])){
        $status=true;
        $user=$_SESSION['nombre_usuario'];
        $email=$_SESSION['email'];
        $path_img=$_SESSION['img'];
        if(empty($_SESSION['img'])){
            $image= '<img src="https://lh3.googleusercontent.com/proxy/7GkW6bKqAnbzN4Yeg_4TkF6ItfqocMD1kMFUZrf7n5AtWuY9LieNOQjFO2nU93zVCaOQw1kJoeLqyi90frAX48xuQX7z7cycL-aYRu0vEmk1LhDIbGZZ0nAt6XJ_pu2xrv4koGo=w1200-h630-p-k-no-nu" ';
          }else{
            $image= '<img src="'.$path_img.'" ';
          }

    }

?>
