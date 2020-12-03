

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
    	$("#fechacolab").datepicker({ 
    		format: 'yyyy-mm-dd'
         });

    	datepicker = $('#fechacolab').datepicker(config);

    });

function reformatDateString(s) {
  var b = s.split(/\D/);
  return b.reverse().join('-');
}
/*
 var datepicker, config;
        config = {
            locale: 'de-de',
            uiLibrary: 'bootstrap4'
        };
        $(document).ready(function () {
            datepicker = $('#datepicker').datepicker(config);
            $('#ddlLanguage').on('change', function () {
                var newLang = $(this).val();
                config.locale = newLang;
                datepicker.destroy();
                datepicker = $('#datepicker').datepicker(config);
            });
        });*/


function preguntarSiNo(){
   alertify.confirm('Eliminar personal', '¿Esta seguro de eliminar este usuario?', function(){ alertify.success('Ok') }
                , function(){ alertify.error('Cancel')});

}