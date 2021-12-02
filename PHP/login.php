<?php include ("template/cabecera.php"); ?>
<div class="custom container-fluid d-flex align-items-center justify-content-center">
    <div class="row bg-light border-dark">
      <div class="col mt-5 col-xs-12 col-md-12 col-lg-12">
        <h1 style="text-align:center">Iniciar Sesion</h1>
        <form action="./sesion.php" method="post">
              
          	   <div class="form-group">
                <input type="text" class="form-control"  id="username" name="_username" value="" placeholder="Username" required="required" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
          	  </div>
            	<div class="form-group">
                	<input type="password" class="form-control" id="password" name="_password" placeholder="Password" required="required" />
                	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
            	</div>

              <div class="form-group">
                  <div class="form-check">
                    <input type="checkbox" id="remember_me" name="_remember_me" class="form-check-input" />
                    <label class="form-check-label" for="remember_me" >Remember me</label>
                  </div>
              </div>
             <div class="form-row">
             <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" type="submit">Iniciar Sesion</button>
                <!--<input type="submit" class="btn btn-primary btn-block" id="_submit" name="_submit" value="Log in" />-->
               </div>
            </div>
        </form>
      </div>
      <hr class="my-2">
        <a href="register.php">¿No tienes cuenta?</a>
    </div>
  </div>  
<?php include ("template/pie.php"); ?>