<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	// $sql = "INSERT INTO usuarios(id, nombre, email) VALUES(null, 'David', 'david@correo.com')";
	// $sql = "INSERT INTO usuarios(id, nombre, email) VALUES(null, 'Héctor', 'hector@correo.com')";
	// $sql = "INSERT INTO usuarios(id, nombre, email) VALUES(9, 'Xavi', 'xavi@correo.com')";
	// $sql = "INSERT INTO usuarios(id, nombre, email) VALUES(null, 'Joan', 'joan@correo.com')";
	$sql = "INSERT INTO create_mysqli(id, nombre, email) VALUES(null, 'Marc', 'marc@correo.com')";
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;
	}
}