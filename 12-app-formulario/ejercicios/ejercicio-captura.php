<?php

$errores='';
$enviado = false;

require "vista.php";

?>

<!DOCTYPE html>
<html>

<head>
  <title>Resultado del formulario</title>
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
  <h1>Resultado del formulario</h1>

  <?php
  function filtrarCorreo($correo) {
    // Filtrar y validar el formato de correo electrónico
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      return $correo;
    } else {
      return false;
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = $_GET["nombre"];
    $correo = $_GET["correo"];
    $telefono = $_GET["telefono"];
    $mensaje = $_GET["mensaje"];

    //Para los errores
    if (!empty($nombre)) {
      $nombre = htmlspecialchars($nombre);
      //Cuando tengo datos, los muestro al final o en el mismo campo si se ha rellenado
    } else {
      $errores .= '<li>Por favor escribe un nombre</li>';
    }
    if (!empty($correo)) {
      $correo = filtrarCorreo($correo);
    } else {
      $errores .= '<li>Por favor escribe un correo</li>';
    }
    if (!empty($telefono)) {
      $telefono = htmlspecialchars($telefono);
    } else {
      $errores .= '<li>Por favor escribe un teléfono</li>';
    }
    if (!empty($mensaje)) {
      $mensaje = htmlspecialchars($mensaje);
    } else {
      $errores .= '<li>Por favor escribe un mensaje</li>';
    }

    if (!$errores) {
      echo "<h2>Datos recibidos:</h2>";
      echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
      echo "<p><strong>Correo:</strong> " . $correo . "</p>";
      echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
      echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
    } else {
      echo "<p>Faltan algunos campos por cumplimentar</p>";
    }
    if (isset($_GET['iniciarsesion'])) {
      echo 'Has iniciado sesión correctamente (por GET) <br>';
    }
    if (isset($_GET['registrar'])) {
      echo 'Te has registrado correctamente (por GET) <br>';
    }
  } else {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    //Para los errores
    if (!empty($nombre)) {
      $nombre = htmlspecialchars($nombre);
      //Cuando tengo datos, los muestro al final o en el mismo campo si se ha rellenado
    } else {
      $errores .= '<li>Por favor escribe un nombre</li>';
    }
    if (!empty($correo)) {
      $correo = filtrarCorreo($correo);
    } else {
      $errores .= '<li>Por favor escribe un correo</li>';
    }
    if (!empty($telefono)) {
      $telefono = htmlspecialchars($telefono);
    } else {
      $errores .= '<li>Por favor escribe un teléfono</li>';
    }
    if (!empty($mensaje)) {
      $mensaje = htmlspecialchars($mensaje);
    } else {
      $errores .= '<li>Por favor escribe un mensaje</li>';
    }

    if (!$errores) {
      echo "<h2>Datos recibidos:</h2>";
      echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
      echo "<p><strong>Correo:</strong> " . $correo . "</p>";
      echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
      echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
      $enviado=true;
    } else {
      echo "<p>Faltan algunos campos por cumplimentar</p>";
    }
    if (isset($_POST['iniciarsesion'])) {
      echo 'Has iniciado sesión correctamente (por POST) <br>';
    }
    if (isset($_POST['registrar'])) {
      echo 'Te has registrado correctamente (por POST) <br>';
    }
  }
  
  ?>
  <!-- <a href="vista.php"><button>Volver al formulario</button></a> -->
</body>
</html>