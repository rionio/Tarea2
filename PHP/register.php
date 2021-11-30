<?php include ("template/cabecera.php"); ?>

<div class="jumbotron jumbotron-fluid" style="text-align: center;"> 
            <div class="container" style="text-align: center;">
                <h1 class="display-3">Registrarse</h1>
                <p class="lead">Es gratuito</p>
                <hr class="my-2">

            </div>
        </div>

<form method="post" action="" name="signup-form">
    <div class="form-element" style="text-align: center;">
        <label>Nombre usuario</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element" style="text-align: center;">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element" style="text-align: center;">
        <label>Contraseña</label>
        <input type="password" name="password" required />
    </div>
    <p>
        
    </p>
    <button class="btn btn-primary btn-lg" type="submit" name="register" value="register" style="display: block; margin: 0 auto">Register</button>
</form>

<?php include ("template/pie.php"); ?>