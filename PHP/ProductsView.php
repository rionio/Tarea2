<?php include("template/Header.php");
    require "./BDconexion.php";
    $conn= CConexion::ConexionBD();

    $id=$_GET['id'];

    $find_query=<<<SQL
    SELECT * FROM producto
    WHERE "ID_Producto"=$id
    SQL;

    $item=pg_query($conn,$find_query);
    $values=pg_fetch_row($item);
    $name=$values[1];
    $description=$values[3];
    $price=$values[4];
    $amount=$values[5];
    $rol=$values[6];
    $img=$values[7];

    $name_query=<<<SQL
    SELECT * FROM cuenta
    WHERE "ROL"=$rol
    SQL;

    $user=pg_query($conn,$name_query);
    $user_name=pg_fetch_row($user);

?>

<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;" backg>
    <div class="card login-form" style="	width:100%;margin:20px;">
        <div class="card-body" style="color: steelblue;background-color: whitesmoke;">
            <div class="container">
                <div class="row" style="width: 30%; float:left">
                    <img src=<?php echo $img; ?> alt="xd"
                    width="400">
                </div>
            </div>
            <div class="container">
                    <div class="row">
                        <h1><strong><?php echo $name; ?></strong></h1>
                        <h5>Por: <?php echo $user_name[1]; ?></h5>
                        <div class="container">
                          <h5 style="color">Calificación:</h5>
                          <div class="d-flex small text-warning mb-2" style="display: flex !important;float: left">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                          </div>   
                        </div>
                        <div class="container">
                            <div class="row" style="width: 40%; float:right">
                                <h3>$<?php echo $price; ?></h3>
                            </div>
                            <p></p>
                            <button type="button" class="btn btn-outline-warning">Añadir al carro</button>
                        </div>

                    </div>
            </div>

        </div>
        <div class="container"><p></p>
        <h3><abbr title="attribute">Comentarios</abbr></h3>
        <div class="row">
            <table>
            <tr class="table-primary">
                <th width="150">Usuario</th>
                <th>Comentario</th>
            </tr>  
            <tr>
                <th>test</th>
                <th>test2</th>
            </tr> 
            </table>
        </div>
        </div>
    </div>
</div>


<?php include("template/pie.php"); ?>