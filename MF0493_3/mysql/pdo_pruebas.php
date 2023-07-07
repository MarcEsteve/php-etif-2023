<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
	echo "Conexion OK";
}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>