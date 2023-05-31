<?php
// Comprobamos si se envió el formulario
if (isset($_POST['language'])) {
    // Obtenemos el idioma seleccionado
    $language = $_POST['language'];

    // Creamos la cookie para guardar el idioma seleccionado
    setcookie('language', $language, time() + 86400); // Caduca después de 1 día (86400 segundos)

    // Redirigimos a la página correspondiente según el idioma seleccionado
    if ($language === 'english') {
        header('Location: english.php');
    } elseif ($language === 'spanish') {
        header('Location: spanish.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Language</title>
</head>
<body>
    <h1>Select Language</h1>
    <form action="" method="post">
        <label>
            <input type="radio" name="language" value="english" checked> English
        </label>
        <br>
        <label>
            <input type="radio" name="language" value="spanish"> Spanish
        </label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>