<?php include("template/Header.php"); ?>
    <p></p>
<div class="global-container" style="height:100%; display: flex;align-items: center;justify-content: center;">
  <div class="card login-form" style="	width:100%;margin:20px;">
    <div class="card-body" style="color: steelblue;background-color: whitesmoke;">
    <div class="jumbotron">
        <h1 class="text-center" >Administrador de compras</h1>
        <p class="text-center">Vea y organise sus productos</p>
    </div>
    <table class="table table-hover">
      <tr class="table-primary">
          <th>Producto</th>
          <th>Precio</th>
          <th>Categoria</th>
          <th>Unidades disponibles</th>
          <th></th>
          <th></th>
      </tr>
        <?php
          require './BDconexion.php';
          $conn = CConexion::ConexionBD();
      
          $rol=$_SESSION['ROL'];
      
          $view_query=<<<SQL
          SELECT * FROM producto
          WHERE rol=$rol
          SQL;

          $view_products=pg_query($conn,$view_query);
          $arr=pg_fetch_all($view_products);
      
          foreach($arr as $row){
            $name=$row["nombre"];
            $category=$row["categoria"];
            $price=$row["precio"];
            $amount=$row["unidades"];
            $id=$row["id_producto"];
            
            echo'
            <tr class="table-light">
            <th scope="row">'.$name.'</th>
            <td>$'.$price.'</td>
            <td>'.$category.'</td>
            <td>'.$amount.'</td>
            <td><a href="ProductsEdit.php?id='.$id.'"> Editar </a></td>
            <td><a href="Products.delete.php?id='.$id.'" onclick="return confirm("estas seguro?")"> Eliminar</a></td>

            </tr>
            ';
          }
        ?>

    </div>
  </div>
</div>


<?php include("template/pie.php"); ?>