<?php

require_once('model.php');

echo realizarConsulta($_POST['NomAlmacen'], $_POST['fechaIConsulta'], $_POST['fechaFConsulta']);

?>