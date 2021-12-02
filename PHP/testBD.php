<?php
    require "./BDconexion.php";

    $gbd = CConexion::ConexionBD();

    if (pg_connection_status($gbd) === PGSQL_CONNECTION_OK) {
        echo 'Estado de la conexión ok';
    } else {
        echo 'No se ha podido conectar';
    }    
    echo "<br />\n";
    $result=pg_query($gbd,"SELECT * FROM cuenta");
    if (!$result) {
        echo "Ocurrió un error.\n";
        exit;
      }
    while ($row = pg_fetch_row($result)) {
        echo "Email: $row[0]  Nombre: $row[1]";
        echo "<br />\n";
    }
?>