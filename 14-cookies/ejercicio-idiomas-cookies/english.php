<?php
// Comprobamos si existe la cookie de idioma
if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
    if ($language === 'spanish') {
        // Redirigimos al archivo correspondiente si el idioma no coincide
        header('Location: spanish.php');
        exit();
    }
} else {
    // Redirigimos al archivo inicial si no se ha seleccionado un idioma
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>English Content</title>
</head>
<body>
    <h1>English Content</h1>
    <p>This is some English content.</p>
</body>
</html>
