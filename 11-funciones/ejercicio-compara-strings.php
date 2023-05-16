<?php

#2. Escribe un programa que dado dos strings compruebe si los dos primeros caracteres y los dos últimos son iguales.

//Dos strings
$texto1 = "asdasszs";
$texto2 ="dsfdds ds ddsdss";

//Los valores de principio y final del primer string
echo $dosprimerosTexto1 = substr($texto1, 0, 1);
echo $dosfinalesTexto1 = substr($texto1, -1);

echo "=";

//Los valores de principio y final del segundo string
echo $dosprimerosTexto2 = substr($texto2, 0, 1);
echo $dosfinalesTexto2 = substr($texto2, -1);
echo "? <br>";

if ($dosprimerosTexto1 == $dosprimerosTexto2 && $dosfinalesTexto1 == $dosfinalesTexto2) {
    echo "Los dos strings empiezan y acaban igual";
} elseif ($dosprimerosTexto1 != $dosprimerosTexto2 && $dosfinalesTexto1 == $dosfinalesTexto2){
    echo "Los dos strings no empiezan igual pero si acaban igual";
} elseif ($dosprimerosTexto1 == $dosprimerosTexto2 && $dosfinalesTexto1 != $dosfinalesTexto2){
    echo "Los dos strings empiezan igual pero no acaban igual";
} else {
    echo "Los dos strings ni empiezan ni acaban igual";
}

?>