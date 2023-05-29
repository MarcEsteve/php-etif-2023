<?php

session_start();

echo 'Bienvenido a la página de ejemplo #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante']   = time();

// Funciona si la cookie de sesión fue aceptada
echo '<br /><a href="ejemplo2.php">Ejemplo 2</a>';

// O quizás pasar el id de sesión, si fuera necesario
// echo '<br /><a href="ejemplo2.php?' . SID . '">página 2</a>';

#EJERCICIO SESIÓN:
// 1. Genera un input de formulario para guardar por la visita en el ejemplo2.php y se lo asigne a la variable $_SESSION['usuario']
// 2. En ejemplo2.php pide de nuevo el usuario y con un condicional le evalues si es el usuario correcto o no. SI es correcto muestre "usuario correcto", siNO muestre "usuario no existe"
// 3. Después de revisar los archivos "index.php", "pagina2.php" y "cerarr.php" para entender la función session_destroy(), generar un botón en la segunda página que, además de comprobar el usuario, también podais "Cerrar sesión" de ese usuario y se redirija a otra pagina, ejemplo "ejercicio-cierra-sesion.php" y salga un mensaje de "Sesión cerrada"

?>