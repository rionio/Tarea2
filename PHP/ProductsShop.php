<?php include("template/Header.php"); ?>
<p></p>
<table class="table table-hover"> <!--cabecera de la tabla-->
<tr class="table-dark">
    <th>Producto</th>
    <th>Precio</th>
    <th>Stock</th>
    <th></th>
</tr>
<?php

$sql="select * from producto";
$result=pg_query($status,$sql);//aqui es la creacion de la lista
while ($show=pg_fetch_array($result)){//recursividad de la lista

?>
<tr>
    <td><?php echo $show['Nombre'] ?></td>
    <td><?php echo $show['Precio'] ?></td>
    <td><?php echo $show['Unidades disponibles'] ?></td>
    <td><a href="#">Test</a></td>

</tr>
<?php
}
?>

</table>


<?php include("template/pie.php"); ?>