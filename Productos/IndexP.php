<?php
	session_start();


	require_once("DBConnection.php");
	include("Consultas.php");

	$Almacen=get_almacen($_GET['id'],$conn);	
	$AlmacenN=get_almacenN($_GET['id'],$conn);
	include("ConsultaP.php");
	include("HeaderP.html");
  	include("../Navbar/_headernavbar.html");
  	//if($_SESSION['Role']=="Administrador")
  			include("../Navbar/_navbar.html");
  	include("NombreAlmacen.php");
  	include("SearchBarP.html");
	include("TProductos.php");
	//$_SESSION['Rol']=="Voluntario"; 
	//if($_SESSION['Role']=="Administrador")

	include("ButtonP.html");
	include("FooterP.html");

?>