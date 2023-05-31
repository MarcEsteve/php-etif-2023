<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDate = $_POST["fecha"];
    
    $today = strtotime(date("Y-m-d")); // Obtiene la fecha actual en formato UNIX timestamp
    $selectedTimestamp = strtotime($selectedDate); // Convierte la fecha seleccionada en formato UNIX timestamp
    
    if ($selectedTimestamp === false) {
        echo "Fecha inválida.";
    } elseif ($selectedTimestamp > $today) {
        echo "La fecha seleccionada es en el futuro.";
        $daysPassed = floor(($selectedTimestamp - $today) / (60 * 60 * 24));
        echo " Faltan {$daysPassed} días desde hoy.";
    } elseif ($selectedTimestamp < $today) {
        echo "La fecha seleccionada es en el pasado.";
        $daysPassed = floor(($today - $selectedTimestamp) / (60 * 60 * 24));
        echo " Han pasado {$daysPassed} días desde esa fecha.";
    } else {
        echo "La fecha seleccionada es hoy.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verificar fecha</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="fecha">Selecciona una fecha:</label>
        <input type="date" id="fecha" name="fecha">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>