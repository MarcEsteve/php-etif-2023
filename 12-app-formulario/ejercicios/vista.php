<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Contacto</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <h1>Formulario de Contacto</h1>
  
  <form action="ejercicio-captura.php" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    
    <br>
    
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required>
    
    <br>
    
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono">
    
    <br>
    
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>
    
    <br>
    
    <input type="checkbox" id="terminos" name="terminos" required>
    <label for="terminos">Acepto los términos y condiciones</label>
    
    <br>
    
    <input type="submit" value="Enviar">
  </form>
</body>
</html>