<?php

#1. Escribe un programa que devuelva si un string es palíndromo (se escribe igual hacia delante y hacia detrás). Ejemplo: "sometemos" o "aibofobia".

echo $palabra = "Amor Roma ";
$palabra = trim($palabra);
$palabra = strtolower($palabra);
$palabra = str_replace(" ", "", $palabra);
$palabraRev = strrev($palabra);

if ($palabra == $palabraRev) {
    echo "<br> es un palíndromo";
} else {
    echo "<br> NO es un palíndromo";
}


?>