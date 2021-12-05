<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea2</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
  <?php
      require_once("User.isLogin.php");
  ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SansApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="ProductsShop.php">Tienda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
        <?php
           if($status){
            echo'
                <ul class="navbar-nav mr-auto" style="width: 13%; float:right">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    '
                    . $user .
                    '
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="UserProfile.php">Perfil</a>
                      <a class="dropdown-item" href="#">Carrito</a>
                      <a class="dropdown-item" href="#">Historial Compra</a>
                      <a class="dropdown-item" href="#">Historial Venta</a>
                      <a class="dropdown-item" href="UserSell.php">Vender producto</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="User.close.php">Salir</a>
                    </div>
                  </li>
                  <img src="https://lh3.googleusercontent.com/proxy/7GkW6bKqAnbzN4Yeg_4TkF6ItfqocMD1kMFUZrf7n5AtWuY9LieNOQjFO2nU93zVCaOQw1kJoeLqyi90frAX48xuQX7z7cycL-aYRu0vEmk1LhDIbGZZ0nAt6XJ_pu2xrv4koGo=w1200-h630-p-k-no-nu" width="50">

                </ul>
            ';
          }else{
            echo('
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="UserSignIn.php">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="UserSignUp.php">Registrarse</a>
                </li>
              </ul>
            ');
          }
        ?>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">