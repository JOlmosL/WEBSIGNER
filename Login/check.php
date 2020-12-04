<?php
$enlace = mysqli_connect("websigner-db-mysql-do-user-8217587-0.b.db.ondigitalocean.com", "doadmin", "gp7xci3jm2vh5wca", "GIGIS_DB", "25060");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);
?>
