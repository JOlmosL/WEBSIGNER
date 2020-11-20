<?php
	session_start();
	//require_once("../SessionCheck/SessionCheck.php");
	require_once("DBConnection.php");
	include("ConsultaP.php");
	include("HeaderP.html");
  	include("../Navbar/_headernavbar.html");
  	if($_SESSION['Role']=="Administrador")
  			include("../Navbar/_navbar.html");
  	include("SearchBarP.html");
	include("TProductos.php");
	//$_SESSION['Rol']=="Voluntario"; 
	if($_SESSION['Role']=="Administrador")
		include("ButtonP.html");
	include("FooterP.html");
	
		
?>