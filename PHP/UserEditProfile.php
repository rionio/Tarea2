<?php 
    include("template/Header.php"); 
    if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location: ./index.php');
        exit;
    }
?>
<div class="jumbotron">
    <h1 class="display-1">Editar Perfil</h1>
    <p></p>

    <div style="width: 60%; float:left">
    <label class="col-form-label col-form-label-lg mt-4" for="input">Nuevo Nombre de usuario</label>
    <input class="form-control form-control-lg" type="text" id="inputLarge">  
    <label class="col-form-label col-form-label-lg mt-4" for="input">Nuevo correo</label>
    <input class="form-control form-control-lg" type="text" id="inputLarge"> 
    <label class="col-form-label col-form-label-lg mt-4" for="input">Nueva contraseña</label>
    <input class="form-control form-control-lg" type="text" id="inputLarge">
    <p></p>
</div>
 
  
<div style="width: 30%; float:right">
        <img src="https://lh3.googleusercontent.com/proxy/7GkW6bKqAnbzN4Yeg_4TkF6ItfqocMD1kMFUZrf7n5AtWuY9LieNOQjFO2nU93zVCaOQw1kJoeLqyi90frAX48xuQX7z7cycL-aYRu0vEmk1LhDIbGZZ0nAt6XJ_pu2xrv4koGo=w1200-h630-p-k-no-nu"
        width="300">

    <p></p>
    </div>

    <p class="lead" style="width: 30%; float:right">
    <input type="submit" value="Realizar cambio" class="btn btn-outline-info" onclick="return confirm('Confirmar cambios?')"/>
    </p>
</div>

<?php include("template/pie.php"); ?>