<?php include("template/Header.php");
    // require "./BDconexion.php";
    // $conn= CConexion::ConexionBD();

//     $id=$_GET['id'];

//     $find_query=<<<SQL
//     SELECT * FROM producto
//     WHERE id_producto=$id
//     SQL;

//     $item=pg_query($conn,$find_query);
//     $values=pg_fetch_row($item);
//     $name=$values[1];
//     $description=$values[3];
//     $price=$values[4];
//     $amount=$values[5];
//     $rol=$values[6];
//     $img=$values[7];

    // $name_query=<<<SQL
    // SELECT * FROM cuenta
    // WHERE rol=$rol
    // SQL;

//     $user=pg_query($conn,$name_query);
//     $user_name=pg_fetch_row($user);

// ?>
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
                        <a href="#calificar">Calificar</a>
                        <div class="container">
                            <div class="row" style="width: 40%; float:right">
                                <h3>$<?php echo $price; ?></h3>
                            </div>
                            <p></p>
                            <form action="Products.add.php" method="POST">
                            <div class="form-group">
                              <label for="exampleSelect1" class="form-label mt-4">Cantidad</label>
                              <select class="form-select" style="width:10%;padding: 0px" id="cantidad" name="_amount">
                                <?php
                                  for($i=1;$i<=$amount;$i++){
                                    echo '<option value='.$i.'>'.$i.'</option>';
                                  }
                                ?>
                              </select>
                            </div>
                            <input name="_id" type="hidden" value=<?php echo $id;?>>
                            <input name="_status" type="hidden" value=<?php echo $status;?>>
                            <input name="_price" type="hidden" value=<?php echo $price;?>>
                            <button class="add-btn btn-outline-warning mt-auto" type="submit" href="Product.add.php"> Añadir al carrito</button>
                            </form>
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
            <th width="150">Calificacion</th>
                <th>Comentario</th>
            </tr>  
            <tr>
                <th>test</th>
                <th>✰✰✰✰✰</th>
                <th>test2</th>
                
            </tr> 
            <?php
            
            $com_query=<<<SQL
            SELECT * FROM comentario
            WHERE id_producto=$id
            SQL;
            
            $comment=pg_query($conn,$com_query);

            while($allcom=pg_fetch_array($comment)){
            ?>
            <tr>
              <td><?php echo $allcom['rol']?></td>
              <td><?php echo $allcom['valoracion']?></td>
              <td><?php echo $allcom['descripcion']?></td>
            </tr>
            <?php
            }
            ?>
            </table>
        </div>
        </div>
        <div class="container"><p></p>
        <h5 id="calificar">Escribe un comentario</h5>
        <fieldset class="form-group">
        <label style="width: 100%; float:left" for="customRange3" class="form-label">Calificación en ✰</label>
        <input style="width: 20%; float:left" type="range" class="form-range" min="0" max="5" step="1" id="customRange3">
    </fieldset><p></p>
    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Comentario"></textarea>
    <p></p>
    </div>
</div>


<?php include("template/pie.php"); ?>