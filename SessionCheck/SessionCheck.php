<?php
	if(!isset($_SESSION['Role'])) {
		header("Location: ../Login/login.html");
	}
?>