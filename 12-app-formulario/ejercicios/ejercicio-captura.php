<!DOCTYPE html>
<html>
<head>
  <title>Resultado del formulario</title>
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
    $nombre = htmlspecialchars($_GET["nombre"]);
    $correo = filtrarCorreo($_GET["correo"]);
    $telefono = htmlspecialchars($_GET["telefono"]);
    $mensaje = htmlspecialchars($_GET["mensaje"]);
    
    if ($nombre && $correo && $telefono && $mensaje) {
      echo "<h2>Datos recibidos:</h2>";
      echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
      echo "<p><strong>Correo:</strong> " . $correo . "</p>";
      echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
      echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
    } else {
      echo "<p>Ha ocurrido un error al procesar el formulario. Por favor, verifica los datos ingresados.</p>";
    }
  }
  ?>
  <a href="vista.php"><button>Volver al formulario</button></a>
</body>
</html>