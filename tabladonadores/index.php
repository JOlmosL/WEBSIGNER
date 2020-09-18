<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- CSS Alerttify -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="componentestabla/styles.css">

	<title></title>
</head>
<body>
	<!-- Image and text -->
	<nav class="navbar navbar-light bg-warning">
    	<a class="navbar-brand" href="#">
    	</a>
    </nav>
    <h1> Donadores</h1>
    <br>
	<div class="container" id="vistabla">
		<div id="tabla"></div>
	</div>


	<!-- Button  modal para registrar -->
	
	<div class="modal fade" id="modalnuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-warning">
					<h5 class="modal-title" id="exampleModalLongTitle">Registrar Donador</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label>Nombre completo</label>
					<input type="" name="" id="nombre" class="form-control input-sm" >
					<label>Correo</label>
					<input type="" name="" id="correo" class="form-control input-sm">
					<label>Teléfono</label>
					<input type="" name="" id="telefono" class="form-control input-sm">
					<label>Fecha de nacimiento</label>
					<input type="" name="" id="fechanaci" class="form-control input-sm" placeholder="dd/mm/aaaa">

				<!--	<input type="" name="" id="cargo" class="form-control input-sm">-->
					<label>Fecha de donación</label>
					<input type="" name="" id="fechacolab" class="form-control input-sm" placeholder="dd/mm/aaaa">
					
				</div>
				<div class="modal-footer bg-light">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="guaradarnuevo">Registrar</button>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div id="tabla"></div>
	</div>

	<!-- Button  modal para edicion de datos -->

	<!-- Modal -->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header  bg-warning">
					<h5 class="modal-title" id="exampleModalLongTitle">Actualizar Donador</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="text" hidden="" id="idpersonal" name="">
					<label>Nombre completo</label>
					<input type="" name="" id="nombreu" class="form-control input-sm" >
					<label>Correo</label>
					<input type="" name="" id="correou" class="form-control input-sm">
					<label>Teléfono</label>
					<input type="" name="" id="telefonou" class="form-control input-sm">
					<label>Fecha de nacimiento</label>
					<input type="" name="" id="fechanaciu" class="form-control input-sm" placeholder="dd/mm/aaaa">
				<!--	<input type="" name="" id="cargo" class="form-control input-sm">-->
					<label>Fecha de donación</label>
					<input type="" name="" id="fechacolab" class="form-control input-sm" placeholder="dd/mm/aaaa">
					
				</div>
				<div class="modal-footer bg-light">
					<button type="button" class="btn btn-success" data-dismiss="modal" id="actualizardatos">Actualizar</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modalMensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header  bg-warning">
					<h5 class="modal-title" id="exampleModalLabel">Enviar mensaje</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Para:</label>
							<input type="text" class="form-control" id="recipient-name" placeholder="Correo electrónico">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Mensaje:</label>
							<textarea class="form-control" id="message-text"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-success">Enviar</button>
				</div>
			</div>
		</div>
	</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentestabla/tabla.php');
	});
</script>
</body>
</html>

