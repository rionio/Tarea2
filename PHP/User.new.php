<?php
  require './BDconexion.php'; //file conexion
  $conn = CConexion::ConexionBD();
  $user=$_POST['_username'];
  $email=$_POST['_email'];
  $date=$_POST['_date'];
  $rol=$_POST['_rol'];
  $pass=$_POST['_password'];

  $register_query=<<<SQL
  INSERT INTO cuenta(
  "Email", "Nombre", "ROL", "Fecha de nacimiento", "Contraseña")
  VALUES ($1, $2, $3, $4, $5)
  SQL;
  $validation_email_query=<<<SQL
  SELECT * FROM cuenta
  WHERE "Email"=$1
  SQL;
  $validation_rol_query=<<<SQL
  SELECT * FROM cuenta
  WHERE "ROL"=$1
  SQL;

  $flag_email=pg_prepare($conn,"Validation_email",$validation_email_query);
  $flag_email=pg_execute($conn,"Validation_email",array($email));

  $flag_rol=pg_prepare($conn,"Validation_rol",$validation_rol_query);
  $flag_rol=pg_execute($conn,"Validation_rol",array($rol));

  $registro=pg_prepare($conn,"Register",$reguister_query);
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