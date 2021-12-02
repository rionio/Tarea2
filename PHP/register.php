<?php include ("template/cabecera.php"); ?>
<div class="custom container-fluid d-flex align-items-center justify-content-center">
    <div class="row bg-light border-dark">
      <div class="col mt-3 col-xs-12 col-md-12 col-lg-12">
        <h1 style="text-align:center">Registrarse</h1>
        <h5 style="text-align:center">Es gratis</h5>
        <form action="./newsession.php" name="signup-form" method="POST">    
          <div class="form-group">
            <input type="text" class="form-control" id="user" name="_username" pattern="[a-zA-Z0-9]+" placeholder="Nombre de usuario" required />                <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group" style="text-align: center;">
            <input type="email" class="form-control" id="email" name="_email" placeholder="Correo electronico" required />
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="date" name="_date" placeholder="Fecha de nacimiento" required="required" />
          	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
        	</div>
          <div class="form-group">
            <input type="text" class="form-control" id="rol" name="_rol" placeholder="ROL USM" required="required" />
          	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
        	</div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="_password" placeholder="Contraseña" required/>
          	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
        	</div>
          <div class="form-group">
          <div class="form-row">
            <div class="d-grid gap-2">
              <button class="btn btn-outline-success" type="submit" name="register" value="register" style="display: block; margin: 0 auto">Registrarse</button>
              <!--<input type="submit" class="btn btn-primary btn-block" id="_submit" name="_submit" value="Log in" />-->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> 
<?php include ("template/pie.php"); ?>