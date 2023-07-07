<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios');
	$statement->execute();

	// $resultados = $statement->fetch();
	// print_r($resultados);
	$resultados = $statement->fetchAll();
	foreach ($resultados as $usuario) {
		echo $usuario['nombre'].'<br>';
		// Ejercicio
		// echo $usuario['nombre'] . " de la id: ". $usuario['id']  . " tiene el correo: ". $usuario['email'] . "<br />";
	}

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>