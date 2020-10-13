function agregardatos(NombrePersonal,TelefonoPersonal,CorreoPersonal,Privilegio,FechaInicioLaboral){
	cadena="NombrePersonal="+NombrePersonal+
	        "TelefonoPersonal="+TelefonoPersonal+
	        "CorreoPersonal="+ CorreoPersonal +
	        "Privilegio"+Privilegio+
	        "FechaInicioLaboral="+FechaInicioLaboral;
	$.ajax({
		type: "POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentestabla/tabla.php');
				alertify.success("¡¡Agregado con exito!!");

			}else{
				alertify.error("¡¡Fallo en el servidor!!");
			}

		}

	});

}