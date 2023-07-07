<?php 

// $id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
	$id = isset($_GET['id']) ? $_GET['id'] : 1;
	
	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id');
	$statement->execute(
		array(':id'=> $id)
	);

	$resultados = $statement->fetch();
	echo "<pre>";
	print_r($resultados);
	echo "</pre>";

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>