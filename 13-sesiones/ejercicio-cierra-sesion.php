<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redireccionar al formulario de inicio de sesión o a otra página de tu elección
header("Location: ejercicio-formulario-usuario.php");
exit();
?>