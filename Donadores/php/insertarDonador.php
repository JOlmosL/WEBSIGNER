<?php  
require_once('model.php');

insertar_donador($_POST['nombred'], $_POST['telefonod'], $_POST['correod'], $_POST['donativod'], $_POST['descripciond'], $_POST['c1d'], $_POST['c2d'], $_POST['c3d'] , $_POST['c4d']);

echo tabla_donador();

?>