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
<<<<<<< Updated upstream

	//var_dump(productosEnAlmacen($Id,$IdA,$conn)); id almacen idproducto , persona , cantidad a mover

	/*

	function agregarProducto($Idproducto,$Idalmacen, $cantidadretiro){

		$consulta="UPDATE tabla SET campo1= campo1+'$cantidadretiro' WHERE id='$idproducto'";
		$result = mysqli_query($conn, $consulta);
		$row = mysqli_fetch_assoc($result);

	}

	function retirarProductos($Idproducto,$Idalmacen, $cantidadretiro){

		$consulta="UPDATE tabla SET campo1= campo1-'$cantidadretiro' WHERE id='$idproducto'";


	}*/



=======
	function get_almacen($id,$conn){
	    $consulta = "SELECT * From almacen ";
	 //   $consulta .= 'WHERE  t.Id = acusa.acusador_id AND s.Id = acusa.acusado_id';
	  
	    $consulta .= "WHERE  IdAlmacen =".$id;
		    
		$resultados_consulta = mysqli_query($conn, $consulta);  
	        
	    $row = mysqli_fetch_assoc($resultados_consulta);
	   
	    mysqli_free_result($resultados_consulta); //Liberar la memoria
	  
	    return $row["IdAlmacen"];



	}
>>>>>>> Stashed changes
  ?>