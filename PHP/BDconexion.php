<?php
    require('../vendor/autoload.php');
    $dotenv =  Dotenv\Dotenv::createInmutable('../data');
    $dotenv->safeload();

    $db_host = $_ENV['DB_HOST'];
    $db_name = $_ENV['DB_NAME'];
    $db_port = $_ENV['DB_PORT'];
    $db_user = $_ENV['DB_USER'];
    $db_password = $_ENV['DB_PASSWORD'];

    $con = pg_connect("host = $db_host 
                      dbname = $db_name 
                      port = $db_port 
                      user = $db_user 
                      password = $db_password") or die ("Error de conexion".
    pg_last_error());
?>