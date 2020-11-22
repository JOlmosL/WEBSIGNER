<?php
	session_start();
	include("Login.html");
	if($_SESSION['Login']==false)
		include("Error.html");
	include("Footer.html");
	$_SESSION["Login"]=True;
?>