<?php
	session_start();
	$_SESSION["Personal"]=3;
	require_once("DBConnection.php");
	function editar_Cantidad($personal,$almacen,$producto,$cantidad,$retiro,$destinatario,$conn){
	$consulta1="UPDATE cantidad SET CantidadRegistrada= ";
	$consulta2="DELETE FROM producto WHERE IdProducto = ".$producto."";
	$consulta3="INSERT INTO movimiento(IdPersonal, IdProducto, IdAlmacen, Tipo, Cantidad, Destinatario) VALUES ('".$personal."','".$producto."','".$almacen."','".$retiro."','".$cantidad."','".$destinatario."')";
	if ($retiro=="Cancelar")
		header("Location: ../Productos/IndexP.php?id=".$_SESSION["Almacen"]."");
	else if ($retiro=="Salida") {
		$_SESSION["cantidad"]-=$cantidad;
	}

	else if ($retiro=="Entrada") {
		$_SESSION["cantidad"]+=$cantidad;
	}
	else
		$resultados_consulta = mysqli_query($conn, $consulta2);
	$consulta1.=$_SESSION["cantidad"]." WHERE IdAlmacen = ".$almacen." AND IdProducto = ".$producto;
	var_dump($consulta1);
	var_dump($consulta2);
	var_dump($consulta3);
	$resultados_consulta = mysqli_query($conn, $consulta1);
	$resultados_consulta = mysqli_query($conn, $consulta3);  
	header("Location: ../Productos/IndexP.php?id=".$_SESSION["Almacen"]."");
	}
	editar_Cantidad($_SESSION["Personal"],$_SESSION["Almacen"],$_SESSION["ProductoN"],$_POST["cantidad"],$_POST["actualizar"],$_POST["destinatario"],$conn);
?>