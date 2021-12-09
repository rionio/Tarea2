<?php
  require './BDconexion.php';
  $conn = CConexion::ConexionBD();

  $id=$_GET['id'];

  $view_query=<<<SQL
  SELECT * FROM producto
  WHERE id_producto=$id;
  SQL;

  $viewed=pg_query($conn,$view_query);
  $img=pg_fetch_row($viewed);

  if(!empty($img[7])){
    unlink($img[7]);
  }

  $delete_query=<<<SQL
  DELETE FROM producto
  WHERE id_producto=$id
  SQL;

  $deleted=pg_query($conn,$delete_query);
  echo'
    <script language="javascript">
          alert("Producto eliminado");
          window.location = "./ProductsShop.php";
    </script>
  ';

?>