<?php
require('../vendor/autoload.php');
class CConexion {
    
    static function ConexionBD(){
        
        $dotenv = Dotenv\Dotenv::createImmutable('../');
        $dotenv->load();

        $db_host = $_ENV['DB_HOST'];
        $db_name = $_ENV['DB_NAME'];
        $db_port = $_ENV['DB_PORT'];
        $db_user = $_ENV['DB_USER'];
        $db_password = $_ENV['DB_PASSWORD'];

        try {
            $conn = new PDO ("pgsql:host = $db_host;dbname = $db_name", $db_user, $db_password);
            echo "Conexion hecha correctamente";
        } catch (PDOExecption $exp) {
            echo ("No se pudo conectar a la base de datos, $exp");
        }
        
        return $conn;
    }

}
?>
