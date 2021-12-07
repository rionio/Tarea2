<?php include("template/Header.php"); ?>
  <div class="row">
    <div class="col-lg-12"  style="background-color:#beefff; margin-top: 18%" >
      <div class="jumbotron">
        <h1 class="display-1" style="text-align: center;">BIENVENIDO
        <?php
          if($status){
            echo ','.strtoupper($user);
          }else{
          }
          ?>
        </h1>
        <p class="lead" style="text-align: center;">Pasese por nuestros productos</p>
        <hr class="my-2">
      </div>
    </div>
  </div>
  <p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;">
  <div class="card login-form" style="	width:120%;margin:20px;">
    <div class="card-body" style="color: steelblue;background-color: white;">
        
        <style>
          table{
            table-layout: fixed;
            width: 100%;
          }
          td{
            width: 25%;
          }
        </style>

      <table>
        <tr>
          <td>
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <div class="form-group">
                <h2>Top Productos mas vendidos</h2>
                <table class="table table-hover">
                  <tr class="table-primary">
                    <th>Producto</th>
                  </tr>
                  <?php
                      // $sql="select * from top" //(top es una vista con el top)
                      // $result=pg_query(conexion,$sql) //consulta
                      // while ($mostrar=pg_fetch_array($result)){

                    //  ?> 
                  <!--<tr>
                        <td><?php echo $mostrar['Producto'] ?></td>
                      </tr> -->
                      <?php 
                    //  }
                     ?>
                </table>
                </div>
              </div>
          </td>
          <td>
                <div class="col-md-10">
                  <div class="form-group">
                  <h2>Top Mejor Calificacion</h2>
                    <table class="table table-hover">
                      <tr class="table-primary">
                        <th>Producto</th>
                      </tr>
                      <?php
                      // $sql="select * from top" //(top es una vista con el top)
                      // $result=pg_query(conexion,$sql) //consulta
                      // while ($mostrar=pg_fetch_array($result)){

                    //  ?> 
                  <!--<tr>
                        <td><?php echo $mostrar['Producto'] ?></td>
                      </tr> -->
                      <?php 
                    //  }
                     ?>
                    </table>
          </td>
          <td>
                <div class="col-md-10">
                  <div class="form-group" >
                  <h2>Top Usuarios con mas ventas</h2>
                    <table class="table table-hover">
                      <tr class="table-primary">
                        <th>Nombre Usuario</th>
                      </tr>
                      <?php
                      // $sql="select * from top" //(top es una vista con el top)
                      // $result=pg_query(conexion,$sql) //consulta
                      // while ($mostrar=pg_fetch_array($result)){

                    //  ?> 
                  <!--<tr>
                        <td><?php echo $mostrar['Producto'] ?></td>
                      </tr> -->
                      <?php 
                    //  }
                     ?>
                    </table>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<?php include("template/pie.php"); ?>