<?php include ("template/cabecera.php"); ?>
<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;">
	<div class="card login-form" style="	width:330px;margin:20px;">
    <div class="card-body" style="color: steelblue;background-color: whitesmoke;">
      <h3 class="card-title text-center" style="font-weight:300;">Inicia Sesión</h3>
      <div class="card-text">
        <form action="./User.session.php" method="POST" style="	padding-top: 10px;font-size: 14px;margin-top: 30px;">
          <div class="form-group">
            <label for="exampleInputEmail1">Correo Electronico</label>
            <input type="email" class="form-control form-control-sm" name="_email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <a href="#" style="float:right;font-size:12px;">¿olvidaste tu contraseña?</a>
            <input type="password" class="form-control form-control-sm" name="_password" required>
          </div>
          <button type="submit" class="btn btn-outline-success" style="font-size: 15px;margin-top:20px;">Iniciar Sesión</button>
          <div class="sign-up" style="	text-align:center;padding:20px 0 0;">
            ¿No tienes una cuenta? <a href="UserSignUp.php">Registrate</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> 
<?php include ("template/pie.php"); ?>
