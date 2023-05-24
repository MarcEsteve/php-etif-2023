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
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = filtrarCorreo($_POST["correo"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);
    
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
</body>
</html>