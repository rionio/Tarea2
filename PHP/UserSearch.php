<?php include("template/Header.php"); ?>

<div class="global-container" style="height:100%; display: flex;align-items: center;justify-content: center;">
  <div class="card login-form" style="	width:100%;margin:20px;">
    <div class="card-body" style="color: steelblue;background-color: whitesmoke;">
    <div class="jumbotron">
        <h1 class="display-3">Buscador</h1>
    </div>
    <table>

    <tr><th><h1>Producto</h1></th></tr>
    <tr class="table-primary">
    <th >Nombre Producto</th>
    </tr>
    <tr>
        <!-- hacer funcion que enumere los productos
        RECUERDA USAR "SELECT LIKE" -->
    </tr>
    </table>
    <p></p><p></p>
    <table>

        <tr><th><h1>Usuario</h1></th></tr>
        <tr class="table-primary">
        <th >Nombre Usuario</th>
        </tr>
        <tr>
            <!-- hacer funcion que enumere los usuarios
            RECUERDA USAR "SELECT LIKE" -->
        </tr>
        </table>

    </div>
  </div>
</div>

<?php include("template/pie.php"); ?>