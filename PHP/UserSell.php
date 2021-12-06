<?php include("template/Header.php"); ?>
    <p></p>
<div class="global-container" style="height:100%; display: flex;align-items: center;justify-content: center;">
<div class="card login-form" style="	width:100%;margin:20px;">
<div class="card-body" style="color: steelblue;background-color: whitesmoke;">
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
    <label for="exampleTextarea" class="form-label mt-4">Descripcion</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    </td>

    <td>
    <div class="col-sm-10">
    <div class="form-group">
    <label class="col-form-label col-form-label-lg mt-4" for="input">Precio</label>
    <input class="form-control form-control-lg" type="text" id="inputLarge" placeholder="$">
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

    <div class="form-group col-sm-3">
    <label class="col-form-label col-form-label-sm mt-2" for="inputSmall">Cantidad</label>
    <input class="form-control form-control-sm" type="text" id="inputSmall">
    </div>

</td>
<td>
    <div style="width: 50%; float:center">
                <img src="https://c.tenor.com/YvaE5INKypcAAAAC/money-cash.gif"
                width="300"  >
                <p></p>
                    <button type="button" class="btn btn-outline-primary">Primary</button>

                </div>
    </td>
</tr>

</table>
</div>

</div>

</div>
</div>


<?php include("template/pie.php"); ?>