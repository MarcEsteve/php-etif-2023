<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola $nombre</h1>";
} else {
	echo 'No has iniciado sesión';
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página 2</title>
</head>
<body>
	<br>
	<a href="cerrar.php">Cerrar sesión</a>
	<br>
	<a href="index.php">Vovler a iniciar sesión</a>
</body>
</html>