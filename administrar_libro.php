<?php
require_once('crud_libro.php');
require_once('libro.php');

$crud= new CrudLibro();
$libro= new Libro();

	if (isset($_POST['insertar'])) {
		$libro->setNombre($_POST['nombre']);
		$libro->setAutor($_POST['autor']);
		$libro->setAnio_edicion($_POST['edicion']);
		$crud->insertar($libro);
		header('Location: index.php');
	}elseif(isset($_POST['actualizar'])){
		$libro->setId($_POST['id']);
		$libro->setNombre($_POST['nombre']);
		$libro->setAutor($_POST['autor']);
		$libro->setAnio_edicion($_POST['edicion']);
		$crud->actualizar($libro);
		header('Location: index.php');
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>