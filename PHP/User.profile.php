<?php include("template/USERhead.php"); ?>
<div class="jumbotron">
    <h1 class="display-1">Perfil</h1>
    <a href="User.Eprofile.php" class="lead">Editar perfil</a>
    <p></p>
</div>
<div style="width: 60%; float:left">
    <h4>Nombre: <?php echo 'test'; //aqui va el $user?></h4> 
    <h4>Correo: <?php echo 'test'; //aqui va el $correo?></h4> 
    <h4>Cant. profuctos vendidos: <?php echo 'test'; //aqui va la cant venta?></h4>
    <h4>Cant. profuctos comprados: <?php echo 'test'; //aqui va cant compra?></h4> 
</div>
 
  
<div style="width: 30%; float:right">
        <img src="https://lh3.googleusercontent.com/proxy/7GkW6bKqAnbzN4Yeg_4TkF6ItfqocMD1kMFUZrf7n5AtWuY9LieNOQjFO2nU93zVCaOQw1kJoeLqyi90frAX48xuQX7z7cycL-aYRu0vEmk1LhDIbGZZ0nAt6XJ_pu2xrv4koGo=w1200-h630-p-k-no-nu"
        width="300">

    <p></p>
    </div>




    <p class="lead">
    <input type="submit" value="Borrar Perfil" class="btn btn-outline-danger" onclick="return confirm('estas seguro?')"/>
    </p>



<?php include("template/pie.php"); ?>