<?php
	require_once("DBConnection.php");
	$Id=1;
	$IdA=1;
	function productosEnAlmacen($Idproducto,$Idalmacen, $conn){
		$consulta= "SELECT ( SELECT COUNT('IdStock') 
					FROM movimiento 
					WHERE IdProducto='".$Idproducto."' AND IdAlmacen='".$Idalmacen."' AND Tipo='Entrada')-(SELECT COUNT('IdStock')  
					FROM movimiento 
					WHERE IdProducto='".$Idproducto."' AND IdAlmacen='".$Idalmacen."' AND Tipo='Salida') AS 'Resta'
					"
					;
		$result = mysqli_query($conn, $consulta);
		$row = mysqli_fetch_assoc($result);
		return $row["Resta"];
	}

	var_dump(productosEnAlmacen($Id,$IdA,$conn));
  ?>