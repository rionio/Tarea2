<?php include("template/Header.php"); ?>
<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;">
<div class="card login-form" style="	width:100%;margin:20px;">
<div class="card-body" style="color: steelblue;background-color: white;">

<h1>Carro</h1>
<table class="table table-hover">
<tr class="table-primary">
    <th>Producto</th>
    <th>Precio</th>
    <th>ID</th>
    <th>Cantidad</th>
</tr>
<?php
    require './BDconexion.php';
    $conn = CConexion::ConexionBD();

    $rol=$_SESSION['ROL'];

    $ask_query=<<<SQL
    SELECT * FROM carrito_compra
    WHERE rol=$1
    SQL;

    $view_query=<<<SQL
    SELECT * FROM orden_compra
    WHERE id_carrito=$1 AND vendido=0
    SQL;

    $id_cart=pg_prepare($conn,"Ask",$ask_query);
    $id_cart=pg_execute($conn,"Ask",array($rol));
    $cart_id=pg_fetch_row($id_cart);

    $view_cart=pg_prepare($conn,"View",$view_query);
    $view_cart=pg_execute($conn,"View",array($cart_id[1]));
    $arr=pg_fetch_all($view_cart);

    foreach($arr as $row){
      $id=$row["id_producto"];
      $subtotal=$row["subtotal"];
      $amount=$row["cantidad"];

      $name_query=<<<SQL
      SELECT nombre FROM producto
      WHERE id_producto=$id
      SQL;

      $name=pg_query($conn,$name_query);
      $product_name=pg_fetch_row($name);

      echo'
      <tr class="table-light">
      <th scope="row">'.$product_name[0].'</th>
      <td>$'.$subtotal*$amount.'</td>
      <td>'.$id.'</td>
      <td>'.$amount.'</td>
      </tr>
      ';
    }
?>
</table>
<div style="width: 60%; float:right">
  <a type="Link" class="btn btn-outline-success" style="width: 40%;" href="Products.buy.php?id_cart=<?php echo $cart_id[1];?>">Comprar todo</a>
</div>
</div>
</div>
</div>
<?php include("template/pie.php"); ?>