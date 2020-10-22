  /*  

$(document).ready(function(){
    $('#personal').load('php/model.php');

});*/


$(document).ready(function(){
    $('#guardarnuevo').click(function(){

        $.ajax({
             type: "POST",

             url:"php/insertarPersonal.php",
             data:{ nombre:$('#nombre').val(),
                    telefono:$('#telefono').val(),
                    correo:$('#correo').val(),
                    privilegio:$('#fechaicolab').val(),
                    fecha:$('#fechafcolab').val()
                }
        }).success(function(){
            
               /* $('#personal').load('php/model.php');*/
                alertify.success("¡¡Agregado con exito!!");

            }).fail(function()
            {
                alertify.error("¡¡Fallo en el servidor!!");
            });

    });
   $('#buscar').keyup(function(){
       $.ajax({
             type: "POST",

             url:"php/tabla.php",
             data:{ buscar:$('#buscar').val()
                }
        }).success(function(data){
            
                $('#tabla_buscar').html(data);
               

            }).fail(function()
            {
                alertify.error("¡¡Fallo en el servidor!!");
            });



   });
});

/*
$(document).ready(function(){
    $('#buscar').click(function(){

        $.ajax({
             type: "POST",

             url:"php/buscarPersonal.php",
             data:{ nombre:$('#nombre').val(),
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

});*/



   var datepicker, config;
    config = {
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    };

    $(document).ready(function () {
        datepicker = $('#fechaicolab').datepicker(config);
    });
      $(document).ready(function () {
        datepicker = $('#fechafcolab').datepicker(config);
    });

    $(document).ready(function () {
        datepicker = $('#fechacolabu').datepicker(config);
    });

   
