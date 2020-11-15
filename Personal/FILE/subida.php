<?php include 'logicaArchivo.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP File upload</title>
	<link rel="stylesheet"  href="styles.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="subida.php" method="post" enctype="multipart/form-data">
				<h3>Upload Files</h3>
				<input type="file" name="myfile"><br>
				<button type="submit" name="save">Subir</button>
				
			</form>
			
		</div>
		<div class="row">
			<table>

				<thead>
					<th>Nombre del archivo</th>
					<th>Referencia del archivo</th>
					<th>Subido el</th>
					<th>Descargar</th>
				</thead>
				<tbody>
					<?php foreach($files as $file): ?>
					<tr>
						
						<td><?php echo $file['NombreArchivo'];?></td>
						<td><?php echo $file['LinkArchivo'] ?></td>
						<td><?php echo $file['CreatedAt'] ?></td>
						<td>
							<a href="subida.php?file_id=<?php echo $file['IdArchivo']?>">Descargar</a>
						</td>
					</tr>
				   <?php endforeach ;?>
				</tbody>
				
			</table>
			
		</div>
	</div>

</body>
</html>