<?php
	session_start();
<<<<<<< Updated upstream
	//require_once("../SessionCheck/SessionCheck.php");
	require_once("DBConnection.php");
=======
	include("Consultas.php");
	require_once("DBConnection.php");
	//require_once("../SessionCheck/SessionCheck.php");
	$Almacen=get_almacen($_GET['id'],$conn);	
>>>>>>> Stashed changes
	include("ConsultaP.php");
	include("HeaderP.html");
  	include("../Navbar/_headernavbar.html");
  	//if($_SESSION['Role']=="Administrador")
  			include("../Navbar/_navbar.html");
  	include("SearchBarP.html");
	include("TProductos.php");
	//$_SESSION['Rol']=="Voluntario"; 
	//if($_SESSION['Role']=="Administrador")
<<<<<<< Updated upstream
		include("ButtonP.html");
	include("FooterP.html");
	
		
=======
	include("ButtonP.html");
	include("FooterP.html");	
>>>>>>> Stashed changes
?>