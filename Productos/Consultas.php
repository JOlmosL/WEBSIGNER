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
	function get_almacen($id,$conn){
	    $consulta = "SELECT * From almacen ";
	  
	    $consulta .= "WHERE  IdAlmacen =".$id;
		    
		$resultados_consulta = mysqli_query($conn, $consulta);  
	        
	    $row = mysqli_fetch_assoc($resultados_consulta);
	   
	    mysqli_free_result($resultados_consulta); //Liberar la memoria
	  
	    return $row["IdAlmacen"];

	}
  ?>