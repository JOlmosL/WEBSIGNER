<?php
session_start();  
require_once('model.php');
//$_SESSION['eliminado']=true;
eliminar_donador($_POST['id']);

header('location: ../index.php');

?>