<?php
  require './BDconexion.php';
  
  session_start();

  $conn = CConexion::ConexionBD();
  
  $rol=$_SESSION['ROL'];
  $path= 'image/'.$rol;
  $img=$_SESSION['img'];
  
  $delete_query=<<<SQL
  DELETE FROM cuenta
    WHERE "ROL"=$1
  SQL;

  unlink($img);
  rmdir($path);

  $delete=pg_prepare($conn,"Delete",$delete_query);
  $delete=pg_execute($conn,"Delete",array($rol));

  session_destroy();
  echo'
  <script language="javascript">
        alert("Cuenta eliminada Correctamente");
        window.location = "./index.php";
  </script>
  ';
?>