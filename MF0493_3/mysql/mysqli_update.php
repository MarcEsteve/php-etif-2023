<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	// $statement = $conexion->prepare("UPDATE usuarios SET nombre = 'Marcos', email = 'marcos@correo.com' WHERE id = 1");
	// $statement = $conexion->prepare("UPDATE usuarios SET id = 2 WHERE id = 9");
	// // $statement = $conexion->prepare("UPDATE usuarios SET id = 7 WHERE id = 8");
	// // $statement = $conexion->prepare("UPDATE usuarios SET nombre = 'Ioana', email = 'iona@correo.com' WHERE id = 4");
	// $statement = $conexion->prepare("UPDATE usuarios SET nombre = 'Ioana', email = 'iona@correo.com' WHERE id = 4");
	$statement = $conexion->prepare("UPDATE usuarios SET edad = 37 WHERE id = 1");

	// Ejecutamos la sentencia.
	$statement->execute();
}