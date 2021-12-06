<?php
  require './BDconexion.php'; //file conexion
  
  function comp($arg1,$arg2){
    if(empty($arg2)){
      return $arg1;
    }else{
      return $arg2;
    }
  }
  function comp_img($arg1,$arg2){
    if(empty($arg2)){
      return $arg1;
    }else{
      $data=file_get_contents("$arg2");
      $imagen=pg_escape_bytea($data);  
      return $imganen;
    } 
  }

  session_start();

  $conn = CConexion::ConexionBD();
  
  $name=comp($_SESSION['nombre_usuario'],$_POST['_new_name']);
  $email=comp($_SESSION['email'],$_POST['_new_email']);
  $pass=comp($_SESSION['contraseña'],$_POST['_new_password']);
  $img=comp_img($_SESSION['img'],$_POST['_new_img']);
  $rol= $_SESSION['ROL'];

  $change_query=<<<SQL
  UPDATE cuenta SET
    "Email"=$1, "Nombre"=$2, "Contraseña"=$3, "Foto de perfil"=$4
  WHERE "ROL"=$5;
  SQL;

  $validation_email_query=<<<SQL
  SELECT * FROM cuenta
  WHERE "Email"=$1
  SQL;

  $flag_email=pg_prepare($conn,"Validation_email",$validation_email_query);
  $flag_email=pg_execute($conn,"Validation_email",array($email));

  if(pg_num_rows($flag_email)>0){
    echo'
        <script language="javascript">
              alert("Este correo ya estan registrados, intentelo otro diferente");
              window.location = "./UserEditProfile.php";  
        </script>
    ';
    exit();
  }

  $change=pg_prepare($conn,"Change",$change_query);
  $change=pg_execute($conn,"Change",array($email,$name,$pass,$img,$rol));


  if($change){
    echo'
        <script language="javascript">
              alert("Datos editados correctamente");
              //window.location = "./UserProfile.php";  
        </script>
    ';
    $_SESSION['nombre_usuario']=$name;
    $_SESSION['email']= $email;
    $_SESSION['contraseña']= $pass;
    $_SESSION['img']=$img;
  }else{
    echo'
        <script language="javascript">
              alert("Datos no editados, intentelo más tarde");
              window.location = "./UserProfile.php";
        </script>
    ';
  }
?>