<?php  
require_once('model.php');

eliminar_personal($_POST['nombre']);

echo tabla_personal();

?>