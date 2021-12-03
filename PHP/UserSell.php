<?php include("template/USERhead.php"); ?>
    <p></p>
<div class="jumbotron">
    <h1 class="display-3">Vender Producto</h1>
    <p class="lead">Ingrese los datos del producto a vender</p>
<table>
    <tr>
    <td>
<div class="container">
    <div class="row">
        <div class="col-sm-10 ">
    <div class="form-group">
    <label class="col-form-label col-form-label-lg mt-4" for="input">Nombre producto</label>
    <input class="form-control form-control-lg" type="text" id="inputLarge">
    <p></p>
    <label for="exampleTextarea" class="form-label mt-4">Descripcion</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    </td>

    <td>
    <div class="col-sm-10">
    <div class="form-group">
    <label class="col-form-label col-form-label-lg mt-4" for="input">Precio</label>
    <input class="form-control form-control-lg" type="text" id="inputLarge" placeholder="$">
    <p></p>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Caregoria</label>
      <select class="form-select" id="exampleSelect1">
        <option>Selecione una</option>
        <option>anime</option>
        <option>games</option>
        <option>weapons</option>
        <option>drugs</option>
      </select>
    </div>
    <p></p>
    <div class="form-group col-sm-3">
    <label class="col-form-label col-form-label-sm mt-2" for="inputSmall">Cantidad</label>
    <input class="form-control form-control-sm" type="text" id="inputSmall">
    </div>

</td>
<td>
    <div style="text-align: right;">
                <img src="https://c.tenor.com/YvaE5INKypcAAAAC/money-cash.gif"
                width="400">
                </div>
    </td>
</tr>

</table>


</div>


<?php include("template/pie.php"); ?>