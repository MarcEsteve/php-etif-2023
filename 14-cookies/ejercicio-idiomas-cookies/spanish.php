<?php
// Comprobamos si existe la cookie de idioma
if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
    if ($language === 'english') {
        // Redirigimos al archivo correspondiente si el idioma no coincide
        header('Location: english.php');
        exit();
    }
} else {
    // Redirigimos al archivo inicial si no se ha seleccionado un idioma
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contenido en Español</title>
</head>
<body>
    <h1>Contenido en Español</h1>
    <p>Este es un contenido en español.</p>
</body>
</html>
