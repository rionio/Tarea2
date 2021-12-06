
<?php 
    include("template/Header.php"); 
?> 
<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;" backg>
  <div class="card login-form" style="	width:100%;margin:20px;">
      <div class="card-body" style="color: steelblue;background-color: whitesmoke;">
        <div style="width: 45%; float:right">
        <img src="https://lh3.googleusercontent.com/proxy/7GkW6bKqAnbzN4Yeg_4TkF6ItfqocMD1kMFUZrf7n5AtWuY9LieNOQjFO2nU93zVCaOQw1kJoeLqyi90frAX48xuQX7z7cycL-aYRu0vEmk1LhDIbGZZ0nAt6XJ_pu2xrv4koGo=w1200-h630-p-k-no-nu"
        width="420" style="border: 5px solid #65D8FF;">
        <p></p>
        </div>
        <div class="jumbotron" style="width: 80%;">
          <h2 class="display-1">Perfil</h2>
          <a href="UserEditProfile.php" class="lead">Editar perfil</a>
          <p></p>
          <div class="list-group" style="width: 60%; float:left">
            <h4 class="list-group-item list-group-item-action active">Nombre: <?php echo $user; ?></h4> 
            <h4 class="list-group-item list-group-item-action active">Correo: <?php echo $user;?></h4> 
            <h4 class="list-group-item list-group-item-action active">Cant. profuctos vendidos: <?php echo 'test'; //aqui va la cant venta?></h4>
            <h4 class="list-group-item list-group-item-action active">Cant. profuctos comprados: <?php echo 'test'; //aqui va cant compra?></h4> 
          </div>
          <p></p>
          <input type="submit" value="Borrar Perfil" class="btn btn-outline-danger" onclick="return confirm('estas seguro?')"/>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("template/pie.php"); ?>