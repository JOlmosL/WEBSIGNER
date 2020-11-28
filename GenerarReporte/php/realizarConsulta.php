<?php
session_start();
require_once('model.php');

$_SESSION['fechaIConsulta'] = $_POST['fechaIConsulta'];
$_SESSION['fechaFConsulta'] = $_POST['fechaFConsulta'];

echo realizarConsulta($_POST['fechaIConsulta'], $_POST['fechaFConsulta']);

include("../_boton_descargar.html");
?>