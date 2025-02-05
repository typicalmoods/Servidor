<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle para crear un contador de horas y minutos</title>
</head>

<body>
    <?php
    //Debes realizar un contador de un reloj que imprima 12 horas
    //con cada uno de sus minutos, es decir, 00:01, 00:02, 00:03... hasta llegar a las 12:59

    for ($horas = 0; $horas < 25; $horas++) {
        for ($minutos = 0; $minutos < 61; $minutos++) {
            for ($segundos = 0; $segundos < 61; $segundos++) {
                if ($horas < 10) {
                    echo "0";
                }
                echo $horas . ":";
                if ($minutos < 10) {
                    echo "0";
                }
                echo $minutos . ":";
                if ($segundos < 10) {
                    echo "0";
                }
                echo $segundos . "<br>";
            }
        }
    }
    ?>

</body>

</html>