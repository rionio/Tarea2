<?php 
    include("template/Header.php"); 
?>
<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;">
	<div class="card login-form" style="	width:100%;margin:20px;">
    <div class="card-body" style="color: steelblue;background-color: whitesmoke;">
      <h1 class="card-title text-left" style="width: 60%; heigth: 10%">Editar Perfil</h1>
      <div class="card-text">
        <form action="./User.change.php" method="POST" style="	padding-top: 10px;font-size: 14px;margin-top: 30px;">
          <div class="form-group" style="width: 65%;float: left;">
            <label class="col-form-label col-form-label-lg mt-4" for="input">Nuevo Nombre de usuario</label>
            <input class="form-control form-control-lg" type="text" name="_new_name" id="inputLarge">  
            <label class="col-form-label col-form-label-lg mt-4" for="input">Nuevo correo</label>
            <input class="form-control form-control-lg" type="email" name="_new_email" id="inputLarge"> 
            <label class="col-form-label col-form-label-lg mt-4" for="input">Nueva contraseña</label>
            <input class="form-control form-control-lg" type="password" name="_new_password" id="inputLarge">
          </div>
          <div class="form-group" style="width: 30%; float: right">
            <img src="https://lh3.googleusercontent.com/proxy/7GkW6bKqAnbzN4Yeg_4TkF6ItfqocMD1kMFUZrf7n5AtWuY9LieNOQjFO2nU93zVCaOQw1kJoeLqyi90frAX48xuQX7z7cycL-aYRu0vEmk1LhDIbGZZ0nAt6XJ_pu2xrv4koGo=w1200-h630-p-k-no-nu"
            width="300">
            <input class="form-control" type="file" style="margin-top: 25px;" name="_new_img" id="formFile">
          </div>
          <input type="submit" value="Realizar cambio" style="margin-top: 15px; float: bottom" class="btn btn-outline-info" onclick="return confirm('Confirmar cambios?')"/>
        </form>
      </div>
    </div>
  </div>
</div> 
<?php include("template/pie.php"); ?>