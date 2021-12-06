<?php
  session_start();

  $img_bytea=$_SESSION['img'];
  $img=pg_unescape_bytea($img_bytea);
  header("Content-type: img/jpeg");
  echo $img;


?>