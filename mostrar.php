<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Lista de libros</title>

	<link rel="icon" type="image/png" href="assets/img/smn.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	<style type="text/css">
		body {
			font: 14px sans-serif;
			text-align: center;
		}

		.wrapper {
			width: 400px;
			padding: 20px;
			border: 3px solid black;
			margin: 3%;
			background-color: white !important;
		}

		.container {
			margin-top: 5%;
			border: 3px solid black;
			width: 550px;
			background-image: linear-gradient(to bottom right, #ffcccb, red);
		}

		h1 {
			color: red;
			font-family: "Times New Roman", Times, serif;
		}
	</style>
</head>

<body>
	<?php
	include_once 'nav.php';
	?>
	<div style="margin: 10%; border: 3px solid black;">
		<?php
		//incluye la clase Libro y CrudLibro
		require_once('crud_libro.php');
		require_once('libro.php');
		$crud = new CrudLibro();
		$libro = new Libro();
		//obtiene todos los libros con el método mostrar de la clase crud
		$listaLibros = $crud->mostrar();
		?>

		<table class="table table-striped">
			<thead class="thead-primary">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Autor</th>
					<th scope="col">Edicion</th>
					<th scope="col">Actualizar</th>
					<th scope="col">Eliminar</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($listaLibros as $libro) { ?>
					<tr>
						<td><?php echo $libro->getNombre() ?></td>
						<td><?php echo $libro->getAutor() ?></td>
						<td><?php echo $libro->getAnio_edicion() ?> </td>
						<td><a class="btn btn-warning" href="actualizar.php?id=<?php echo $libro->getId() ?>&accion=a">Actualizar</a> </td>
						<td><a class="btn btn-danger" href="administrar_libro.php?id=<?php echo $libro->getId() ?>&accion=e">Eliminar</a> </td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>