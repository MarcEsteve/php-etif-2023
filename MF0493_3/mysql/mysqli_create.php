<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("CREATE TABLE `create_mysqli` ( `id` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))");
	// Ejecutamos la sentencia.
	$statement->execute();
}