<?php
  require "./BDconexion.php";
  $conn = CConexion::ConexionBD();
  $all_query=<<<SQL
  SELECt * FROM "All"
  SQL;

  $all_view=pg_query($conn,$all_query);
  $arr=pg_fetch_all($all_view);
  foreach($arr as $row){
    $id=$row["ID_Producto"];
    $name=$row["Nombre"];
    $img=$row["Imagen"];
    $description=$row["Descripcion"];
    $category=$row["Categoria"];
    $price=$row["Precio"];
    echo'
    <div class="col mb-5">
      <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src='.$img.' alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
          <div class="text-center">
          <!-- Product name-->
            <h5 class="fw-bolder" style="line-height: 1.2;">'.$name.'</h5>
            <div class="d-flex justify-content-center small text-warning mb-2" style="display: flex !important;">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
            </div>
            $'.$price.'
          </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
          <div class="text-center"><a class="btn btn-outline-primary mt-auto" href="ProductsView.php?id='.$id.'">Ver ahora</a></div>
        </div>
      </div>
    </div>
    ';
  }
?> 