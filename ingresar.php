<html>

<head>
	<title> Ingresar Libro</title>
	<link rel="icon" type="image/png" href="assets/img/smn.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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
	<div class="container">
		<div class="wrapper">
			<h1 class="text-center">Nuevo Libro</h1>
			<form action='administrar_libro.php' method='post'>
				<div class="row">
					<div class="col">
						<input type="text" class="form-control" id="nombre" name='nombre' placeholder="Nombre del libro">
					</div>
					<div class="col">
						<input type="text" class="form-control" id="autor" name='autor' placeholder="Nombre del autor">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col">
						<input type="text" class="form-control" id="edicion" name='edicion' placeholder="Fecha de edicion">
					</div>

					<div class="col">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
				</div>
				<br>
				<center>				
				<input type='hidden' name='insertar' value='insertar'>
				<input type='submit' value='Guardar' class="btn btn-success">					
				</center>

			</form>
		</div>
	</div>

</body>

</html>