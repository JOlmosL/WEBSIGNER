<?php
	session_start();
	include("DBConnection.php");
	include("Consultas.php");
	$producto;
	function insertar_ProductoP($nombre,$descripcion,$precio,$conn){
		$consulta1="INSERT INTO Producto(NombreProducto,Descripcion,PrecioEstimado) VALUES ('".$nombre."','".$descripcion."','".$precio."')";
		mysqli_query($conn, $consulta1);
		$producto=UltimoP($conn);
		$destination='image/'.$producto.'.png';
		$file=$_FILES['image']['tmp_name'];
		move_uploaded_file($file, $destination);
	}
	function insertar_ProductoA($almacen,$producto){
		$consulta2="INSERT INTO Cantidad(IdProducto,IdAlmacen,CantidadRegistrada) VALUES ('".$producto."','".$almacen."','1')";
		mysqli_query($conn, $consulta2);
		header("Location: ../Productos/IndexP.php?id=".$_SESSION["Almacen"]."");
	}
	insertar_ProductoP($_POST["NombreProducto"],$_POST["Descripcion"],$_POST["PrecioEstimado"],$conn);
	insertar_ProductoA($_SESSION["Almacen"],$conn);
  ?>