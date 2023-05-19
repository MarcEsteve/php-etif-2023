<?php 

$amigo = array('telefono' => 6545647, 'altura'=>175, 'ciudad'=>'Castelldefels');

### extract()
extract($amigo); //extrae las claves de un array asociativo como si fueran variables
// var_dump($amigo);
// echo $amigo["telefono"];
// echo "<br>";
// echo $telefono;
// $telefono = 6454564654;
// echo "<br>";
// echo $amigo["telefono"];
// echo "<br>";
// echo $telefono;
// echo "<br>";
// echo $altura;
// echo "<br>";
// echo $ciudad;
// $amigo["telefono"] = $telefono;
// var_dump($amigo);

$semana = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

### array_pop()

// var_dump($semana);
// echo "<br>";
// $ultimo_dia = array_pop($semana); //Extraer el último valor del array en $semana y guardandolo en la variable $ultimo_dia
// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }
// echo "<br>";
// echo $ultimo_dia;

### array_push()

$frutas = array("naranja", "plátano");
// print_r($frutas);
array_push($frutas, "manzana", "arándano");
// print_r($frutas);

echo join(', ', $semana); //Une los valores de array con un salto de linea

###EJERCICIO
// Genera una enumeración de $semana como un join() pero que el último valor coloque una conjunción "y" en vez de una coma ","

// echo count($semana); //cuenta cuandos dias hay en el array $semana

// rsort($semana);
// echo join(', ', $semana);

$semana_reverse = array_reverse($semana); //Orden inverso del array
// echo join(', ', $semana_reverse);

?>