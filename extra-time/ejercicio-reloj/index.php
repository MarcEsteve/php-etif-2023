<!DOCTYPE html>
<html>
<head>
    <title>Reloj en PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        setInterval(function() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = (currentTime.getSeconds()<=9)?"0" + currentTime.getSeconds():currentTime.getSeconds();
            document.getElementById('clock').innerHTML = hours + ":" + minutes + ":" + seconds;
        }, 1000);
    </script>
</head>
<body>
    <h1>RELOJ:</h1>
    <!-- <div class="clock">
        <?php
        // echo time();
        // while(time() < 1685543350){
        //     $hora= date('H:i:s');
        //     echo $hora;
        // }
        ?>
    </div> -->
    <div class="clock" id="clock">
        <?php
            echo date('H:i:s', time());
        ?>
    </div>
    <!-- <div class="clock" id="clock">
        <?php
        
        // while (true) {
        //     echo date('h:i:s', time());
        //     echo str_repeat(' ', 4096); // Limpia el búfer de salida
        //     flush(); // Envia el contenido al navegador
        //     sleep(1); // Espera 1 segundo
           
        // }
        ?>
    </div> -->
</body>
</html>