<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    //Consulta para generar los primeros 5 registros de Productos
    $tablaCinco = $conexion->query('SELECT * FROM productos LIMIT 0,5;');
    $resultadosTabla = $tablaCinco->fetchAll();

?>