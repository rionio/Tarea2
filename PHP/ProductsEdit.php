<?php include("template/Header.php"); ?>
<div class="global-container" style="	height:100%; display: flex;align-items: center;justify-content: center;">
<div class="card login-form" style="	width:100%;margin:20px;">
<div class="card-body" style="color: steelblue;background-color: white;">

<h1 class="display-3">Editar producto</h1>
        <!-- <form action="./Products.sell.php"  enctype="multipart/form-data" method="POST"> -->
          <table>
            <tr>
              <td>
                <div class="container">
                    <div class="row">
                      <div class="col-sm-10 ">
                        <div class="form-group">
                            <div class="form-group">
                                <fieldset disabled="">
                                    <label class="form-label" for="disabledInput">Nombre producto</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Nombre producto" disabled="">
                                </fieldset>
                            </div>      
                            <!-- aqui ponemos en el readme que no 
                            encontramos muy adecuado que se pueda cambiar todo
                            el producto, puesto a que para eso mejor lo elimina de la lista 
                            -->
                          <label class="form-label mt-4">Nueva Descripcion</label>
                          <textarea class="form-control" name="_description" rows="10"></textarea>
                        </div>
              </td>
              <td>
                <div class="col-sm-10">
                  <div class="form-group">
                    <label class="col-form-label col-form-label-lg mt-4" for="input">Nuevo Precio</label>
                    <input class="form-control form-control-lg" type="text" name="_price" placeholder="$">
                    <div class="form-group">
                      <label for="exampleSelect1" class="form-label mt-4">Categoria</label>
                      <input class="form-control" id="disabledInput" type="text" placeholder="Categoria actual" disabled="">

                    </div>
                    <div class="form-group col-sm-4">
                      <label class="col-form-label col-form-label-sm mt-2">Nueva Cantidad</label>
                      <input class="form-control form-control-sm" name="_amount" type="text">
                    </div>
                    <label class="col-form-label col-form-label-lg mt-4" for="file">Foto del producto</label>
                    <input class="form-control" type="file" style="margin-top: 15px;" name="_img_product" id="file" accept="image/*" required>
              </td>
              <td>
                <div style="width: 50%; float:center">
                  <img src="https://im2.ezgif.com/tmp/ezgif-2-ac8e05c7d142.gif" width="300">
                          <p></p>
                  <button type="submit" class="btn btn-outline-primary">Confirmar</button>
                </div>
              </td>
            </tr>
          </table>
        <!-- </form> -->

</div>
</div>
</div>
<?php include("template/pie.php"); ?>