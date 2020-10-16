

$(document).ready(function(){
	$('#tabla').load('componentestabla/tabla.php');

});


$(document).ready(function(){
	$('#guardarnuevo').click(function(){

		$.ajax({
		     type: "POST",

		     url:"php/insertarPersonal.php",
		     data:{	nombre:$('#nombre').val(),
			        telefono:$('#telefono').val(),
			        correo:$('#correo').val(),
			        privilegio:$('#cargo').val(),
			        fecha:$('#fechacolab').val()
			    }
		}).success(function(){
			
				$('#tabla').load('componentestabla/tabla.php');
				alertify.success("¡¡Agregado con exito!!");

			}).fail(function()
			{
				alertify.error("¡¡Fallo en el servidor!!");
			});

	});

});

var datepicker, config;
    config = {
    	locale: 'es-es',
    	uiLibrary: 'bootstrap4'
    };

    $(document).ready(function () {
    	datepicker = $('#fechacolab').datepicker(config);
    });