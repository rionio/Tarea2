<?php
  require './BDconexion.php';
  
  session_start();

  $conn = CConexion::ConexionBD();

  $name=$_POST['_name'];
  $description=$_POST['_description'];
  $price=$_POST['_price'];
  $category=$_POST['_category'];
  $amount=$_POST['_amount'];
  $rol=$_SESSION['ROL'];

  if($_FILES["_img_product"]["error"]>0){
    echo "Error al cargar archivo";
  }else{
    $path= 'image/products/'.$rol.'/';
    $img= $path.$_FILES["_img_product"]["name"];
    if(!file_exists($path)){
      mkdir($path);
    }
    if(!file_exists($img)){
      $resultado= move_uploaded_file($_FILES["_img_product"]["tmp_name"],$img);
      if($resultado){
      }else{
        echo "Error";
      }
    }
  }


  $add_query=<<<SQL
  INSERT INTO producto(
    nombre, categoria, descripcion, precio, unidades, rol, imagen)
    VALUES ($1, $2, $3, $4, $5, $6, $7);
  SQL;

  $insert=pg_prepare($conn,"Insert",$add_query);
  $insert=pg_execute($conn,"Insert",array($name,$category,$description,$price,$amount,$rol,$img));
  if($insert){
    echo'
    <script language="javascript">
          alert("Producto agregado correctamente");
          window.location = "./index.php";
    </script>
    ';
  }else{
    echo'
    <script language="javascript">
          alert("Producto no agregado, intentelo de nuevo");
          //window.location = "./UserSell.php";
    </script>
    ';
  }

?>