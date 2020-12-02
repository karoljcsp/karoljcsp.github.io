<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud = new CrudLibro();
$libro = new Libro();
//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
$libro = $crud->obtenerLibro($_GET['id']);
?>
<html>

<head>
	<title>Actualizar Libro</title>
	<link rel="icon" type="image/png" href="assets/img/smn.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

	<style type="text/css">
		body {
			font: 14px sans-serif;
			text-align: center;
		}

		.wrapper {
			padding: 25px;
			border: 3px solid black;
			margin: 3%;
			background-color: white !important;
		}

		.container {
			margin-top: 5%;
			width: 50% !important;
			border: 3px solid black;
			background-image: linear-gradient(to right top, #670767, #ae1c4a, #c76326, #b5a825, #7ae57d);
		}

		h1 {
			font-family: "Times New Roman", Times, serif;
		}
	</style>
</head>

<body>
	<?php
	include_once 'nav.php';
	?>
	<br><br>
	<div class="container">
		<div class="wrapper">
			<h1 class="text-center">Actualizar Libro</h1>
			<form action='administrar_libro.php' method='post'>
				<div class="row">
					<div class="col">
						<label for="id">ID Libro</label>
						<input type='text' class="form-control" readonly name='id' value='<?php echo $libro->getId() ?>'>
					</div>
					<div class="col">
						<label for="nombre">Nombre Libro</label>
						<input type='text' class="form-control" name='nombre' value='<?php echo $libro->getNombre() ?>'>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col">
						<label for="nombre">Autor Libro</label>
						<input type='text' class="form-control" name='autor' value='<?php echo $libro->getAutor() ?>'>
					</div>

					<div class="col">
						<label for="nombre">Fecha Edición</label>
						<input type='text' class="form-control" name='edicion' value='<?php echo $libro->getAnio_edicion() ?>'>
					</div>
				</div>
				<br>
				<center>
					<input type='hidden' name='actualizar' value'actualizar'>
					<input type='submit' value='Guardar' class="btn btn-success">
				</center>
			</form>
		</div>
	</div>
</body>

</html>