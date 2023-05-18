<?php

    class Impressora {

        //Atributos
        public $tinta = true; //Boolean
        public $paper = true; //Boolean
        public $tamany = "DINA4"; //String
        public $color = "negre"; //String

        //Métodos
        public function imprimeix($tinta, $paper, $tamany, $color) {
            //Añadir el parámetro $color
            if ($tinta && $paper) {
                echo "Es pot imprimir en " . $tamany . ", en color " . $color;
            } else {
                echo "Falta tinta o paper";
            }
        }
    }
    // Ejercicio 3B
    $semana = array("Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte","Diumenge");

    //Ej 4 incial ordenar array $semana
    sort($semana);
    //var_dump($semana); //Comprovar que se ha ordenado

    


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    
    <ul>
        <!-- Codi PHP del ejercicio 4 mostrar lista del array $semana ordenada-->
        <?php
            foreach ($semana as $dia) {
                echo "<li>" . $dia . "</li>";
            }
        ?> 
    </ul>
    <?php
    //Ejercicio 5 A
        //Para mostrar "Es pot imprimir en DINA4, color negre"
        $hp = new Impressora(); //Instanciación del objeto de la class Impressora
        // Se utilizan los atributos y los métodos a través del objeto $hp
        //Con el uso del método
        $hp->imprimeix(true, true, "DINA4", "negre");
        echo "<br>";
        //Con el uso de los atributos por separado y concatenados
        echo "Es pot imprimir en {$hp->tamany}, en color {$hp->color}";
    ?>
</body>
</html>