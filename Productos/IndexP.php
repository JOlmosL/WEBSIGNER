<?php
	session_start();
	include("ConsultaP.php");
	include("HeaderP.html");
	require_once("DBConnection.php");
	include("TProductos.php");
	$_SESSION['Rol']=="Voluntario"; 
	if($_SESSION['Rol']=="Administrador")
		include("ButtonP.html");
	include("FooterP.html");
	
		
?>