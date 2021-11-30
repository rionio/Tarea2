<?php include ("template/cabecera.php"); ?>
        <div class="jumbotron jumbotron-fluid" style="text-align: center;"> 
            <div class="container" style="text-align: center;">
                <h1 class="display-3">Iniciar sesion</h1>
                <p class="lead">Bienvenido de vuelta</p>
                <hr class="my-2">
                <a href="register.php" target="_blank">¿No tienes cuenta?</a>
                <p>

                
                </p>
            </div>
        </div>

        <form method="post" action="" name="signin-form">
            <div class="form-element" style="text-align: center;">
                <label>Nombre usuario: </label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element" style="text-align: center;">
                <label>Contraseña:</label>
                <input type="password" name="password" required />
            </div>
            <p>
                
            </p>
            <button class="btn btn-primary btn-lg" style="display: block; margin: 0 auto" type="submit" name="login" value="login" >Iniciar sesion </button>
        </form>   
<?php include ("template/pie.php"); ?>