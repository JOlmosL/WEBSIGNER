<?php
	session_start();
	include("Login.html");
<<<<<<< Updated upstream
	if(isset($_SESSION['Login']) && $_SESSION['Login']==false)
=======
	if($_SESSION['Login']==false)
>>>>>>> Stashed changes
		include("Error.html");
	include("Footer.html");
	$_SESSION['Login']=True;
?>