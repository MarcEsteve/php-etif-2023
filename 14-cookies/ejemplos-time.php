<?php

    #1. Obtener la marca de tiempo actual:
    $marcaTiempoActual = time();
    echo "Marca de tiempo actual: " . $marcaTiempoActual . "<br>";

    #2. Calcular una fecha futura agregando segundos a la marca de tiempo actual:
    $segundos = 3600; // 1 hora
    $marcaTiempoFuturo = time() + $segundos;
    echo "Marca de tiempo futura: " . $marcaTiempoFuturo . "<br>";

    #3. Convertir una marca de tiempo en una fecha legible:
    $marcaTiempo = time();
    $fechaLegible = date("d-m-Y H:i:s", $marcaTiempo);
    echo "Fecha legible: " . $fechaLegible . "<br>";

    #4. Comparar dos marcas de tiempo:
    $marcaTiempo1 = time();
    $marcaTiempo2 = strtotime("2023-01-01");
    if ($marcaTiempo1 < $marcaTiempo2) {
        echo "La marca de tiempo 1 es anterior a la marca de tiempo 2.<br>";
    } elseif ($marcaTiempo1 > $marcaTiempo2) {
        echo "La marca de tiempo 1 es posterior a la marca de tiempo 2.<br>";
    } else {
        echo "Ambas marcas de tiempo son iguales.<br>";
    }
    //Fechas y sumas de tiempo
    echo strtotime("now"), "\n";
    echo strtotime("10 September 2000"), "\n";
    echo strtotime("+1 day"), "\n";
    echo strtotime("+1 week"), "\n";
    echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
    echo strtotime("next Thursday"), "\n";
    echo strtotime("last Monday"), "\n";
?>