<?php
  require './BDconexion.php';
  $conn = CConexion::ConexionBD();

  session_start();
  
  $id=$_POST['_id'];
  $rol=$_SESSION['ROL'];
  $amount=$_POST['_amount'];
  $status=$_POST['_status'];
  $price=$_POST['_price'];


  if($status){

    $add_order_query=<<<SQL
    INSERT INTO orden_compra VALUES($1,$2,$3,$4,0)
    SQL;
    
    $ask_query=<<<SQL
    SELECT * FROM carrito_compra
    WHERE rol=$1
    SQL;

    $ask_cart=pg_prepare($conn,"Ask",$ask_query);
    $ask_cart=pg_execute($conn,"Ask",array($rol));
    $id_cart=pg_fetch_row($ask_cart);
    
    $insert=pg_prepare($conn,"Insert",$add_order_query);
    $insert=pg_execute($conn,"Insert",array($id,$id_cart[1],$amount,$price));

    echo'
    <script language="javascript">
          alert("Producto agregado correctamente");
          window.location = "./ProductsShop.php";
    </script>
    ';

  }else{
    echo'
    <script language="javascript">
          alert("Tienes que iniciar sesion para comprar");
          window.location = "./UserSignIn.php";
    </script>
    ';
  }

/*

  if($insert){
    echo'
    <script language="javascript">
          alert("Producto agregado correctamente");
          window.location = "./index.php";
    </script>
    ';
  }else{
    echo'
    <script language="javascript">
          alert("Producto no agregado, intentelo de nuevo");
          //window.location = "./UserSell.php";
    </script>
    ';
  }
 */


?>