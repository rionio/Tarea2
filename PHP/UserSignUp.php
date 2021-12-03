<?php include ("template/cabecera.php"); ?>
<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;">
	<div class="card login-form" style="	width:330px;margin:20px;">
    <div class="card-body" style="color: steelblue;background-color: whitesmoke;">
      <h2 class="card-title text-center" style="font-weight:300;">Registrate</h2>
      <h5 class="card-title text-center" style="font-weight:300;">Es gratis :D</h5>
      <div class="card-text">
        <form action="./User.new.php" name="signup-form" method="POST">    
          <div class="form-group">
            <label>Nombre de usario</label>
            <input type="text" class="form-control" id="user" name="_username" pattern="[a-zA-Z0-9]+" placeholder="ex:Floridor" required />
          </div>
          <div class="form-group">
            <label>Correo Electronico</label>
            <input type="text" class="form-control" id="email" name="_email" placeholder="Example@123.cl" required />
          </div>
          <div class="form-group">
            <label>Fecha de nacimiento</label>
            <input type="date" class="form-control" id="date" name="_date" required="required" />
          </div>
          <div class="form-group">
            <label>ROL USM</label>
            <input type="text" class="form-control" id="rol" name="_rol" placeholder="ex:2020305196" required="required" />
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" id="password" name="_password" placeholder="Contraseña" required/>
          </div>
          <button type="submit" class="btn btn-outline-success" style="font-size: 15px;margin-top:20px;">Registrarse</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include ("template/pie.php"); ?>