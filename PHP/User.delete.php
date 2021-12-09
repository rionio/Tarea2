<?php
  require './BDconexion.php';
  
  session_start();

  $conn = CConexion::ConexionBD();
  
  $rol=$_SESSION['ROL'];
  $path= 'image/users/'.$rol;
  $img_path='image/products/'.$rol.'/';
  $img=$_SESSION['img'];
  
  $delete_query=<<<SQL
  DELETE FROM cuenta
    WHERE rol=$1
  SQL;

  if(!empty($img)){
    unlink($img);
    rmdir($path);
  }
  $delete=pg_prepare($conn,"Delete",$delete_query);
  $delete=pg_execute($conn,"Delete",array($rol));



  if($delete){
    $error=pg_result_error($delete);
    echo $error;
    session_destroy();
    echo('
          <script language="javascript">
              alert("wea borrada");
              window.location = "./UserSignIn.php";  
          </script>
      ');
  }else{
      
      echo('
          <script language="javascript">
              alert("wea no borrada");
              //window.location = "./UserSignIn.php";  
          </script>
      ');
  }
?>