<?php include("template/Header.php"); ?>
  <div class="row">
    <div class="col-lg-12"  style="background-color:#beefff; algin=center; margin-top: 18%" >
      <div class="jumbotron">
        <h1 class="display-1" style="text-align: center;">BIENVENIDO
        <?php
          if($status){
            echo ','.strtoupper($user);
          }else{
          }
          ?>
        </h1>
        <p class="lead" style="text-align: center;">Pasese por nuestros productos</p>
        <hr class="my-2">
      </div>
    </div>
  </div>
<?php include("template/pie.php"); ?>