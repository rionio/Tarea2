<?php
  require './BDconexion.php';
  $conn = CConexion::ConexionBD();
  
  $cart_id=$_GET['id_cart'];

  $buy_query=<<<SQL
  UPDATE orden_compra
  SET vendido=1
  WHERE id_carrito=$1 
  SQL;

  $buy_cart=pg_prepare($conn,"Buy",$buy_query);
  $buy_cart=pg_execute($conn,"Buy",array($cart_id));

  echo'
  <script language="javascript">
        alert("Productos Comprados, Muchas gracias");
        window.location = "./ProductsShop.php";
  </script>
  ';
?>