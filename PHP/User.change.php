<?php
  require './BDconexion.php'; //file conexion
  if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: ./index.php');
    exit;
  }

  function comp($arg1,$arg2){
    if($arg1===$arg2){
      return $arg1;
    }else{
      return $arg2;
    }
  }

  session_start();

  $conn = CConexion::ConexionBD();
  
  $name=comp($_SESSION['nombre_usuario'],$_POST['_new_name']);
  $email=comp($_SESSION['email'],$_POST['_new_email']);
  $pass=comp($_SESSION['contraseña'],$_POST['_new_name']);
  $img=pg_escape_bytea(file_get_contents(comp($_SESSION['img'],$_POST['_new_img'])));

  $email=$_POST['_new_email'];
  $pass=$_POST['_new_password'];
  $img=$_POST['_new_img'];

  $change_query=<<<SQL
  UPDATE cuenta
  SET "Email"=?, "Nombre"=?, "Contraseña"=?, "Foto de perfil"=?
	WHERE "ROL"=;
  SQL;
  $flag_email=pg_prepare($conn,"Validation_email",$validation_email_query);
  $flag_email=pg_execute($conn,"Validation_email",array($email));

  $flag_rol=pg_prepare($conn,"Validation_rol",$validation_rol_query);
  $flag_rol=pg_execute($conn,"Validation_rol",array($rol));

  $registro=pg_prepare($conn,"Register",$register_query);
  $registro=pg_execute($conn,"Register",array($email,$user,$rol,$date,$pass));

  if(pg_num_rows($flag_email)>0 || pg_num_rows($flag_rol)>0){
    echo('
        <script language="javascript">
              alert("Este correo y/o ROL ya estan registrados, intentelo otro diferente");
              window.location = "./UserSignUp.php";  
        </script>
    ');
    exit();
  }

  if($registro){
    echo('
        <script language="javascript">
              alert("Usuario registrado exitosamente");
              window.location = "./UserSignIn.php";  
        </script>
    ');
  }else{
    echo('
        <script language="javascript">
              alert("Intentelo de nuevo, usuario no registrado");
              window.location = "./UserSignUp.php";  
        </script>
    ');
  }
?>