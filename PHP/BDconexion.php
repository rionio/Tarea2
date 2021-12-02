<?php
require '../vendor/autoload.php';
class CConexion {
    
    static function ConexionBD(){
        
        $dotenv = Dotenv\Dotenv::createImmutable('../');
        $dotenv->safeload();

        $db_host = $_ENV['DB_HOST'];
        $db_name = $_ENV['DB_NAME'];
        $db_port = $_ENV['DB_PORT'];
        $db_user = $_ENV['DB_USER'];
        $db_password = $_ENV['DB_PASSWORD'];

        $conn = pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_password") or die ("no se puede conectar");
        echo pg_last_error($conn);
    
        return $conn;
    }

}
?>
