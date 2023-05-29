<?php

session_start();

echo 'Bienvenido a la página de ejemplo #2<br />';

echo $_SESSION['color'] . '<br>';  // verde
echo $_SESSION['animal']. '<br>'; // gato
echo date('H:i:s d m Y', $_SESSION['instante']);
echo "<br>";
echo "Instante en segundos transcurridos desde <br> Fecha Unix  1 de enerco de 1970 GMT 00:00:00 : " . $_SESSION['instante'] . " segundos";

// Puede ser conveniente usar el SID aquí, como hicimos en pagina1.php
echo '<br /><a href="ejemplo1.php">Ejemplo 1</a>';
?>