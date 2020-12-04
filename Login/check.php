<?php
$enlace = mysqli_connect("websigner-db-mysql-do-user-8217587-0.b.db.ondigitalocean.com", "doadmin", "gp7xci3jm2vh5wca", "GIGIS_DB", "25060");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

function get_almacen($id,$conn){
    $consulta = "SELECT * From almacen ";
  
    $consulta .= "WHERE  IdAlmacen =".$id;
        
    $resultados_consulta = mysqli_query($conn, $consulta);  
        
    $row = mysqli_fetch_assoc($resultados_consulta);
   
    mysqli_free_result($resultados_consulta); //Liberar la memoria
  
    return $row["IdAlmacen"];

}
var_dump(mysqli_query($enlace,"SELECT * FROM almacen"));


echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);
?>
