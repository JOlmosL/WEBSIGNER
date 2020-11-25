<?php  
require_once('model.php');

insertar_personal($_POST['rol'], $_POST['fechaIConsulta'], $_POST['fechaFConsulta']);

echo tabla_personal();

?>