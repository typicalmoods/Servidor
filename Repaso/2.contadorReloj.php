<?php
for ($horas = 0; $horas < 23; $horas++) {
    for ($minutos = 0; $minutos < 59; $minutos++) {
        for ($segundos = 0; $segundos < 59; $segundos++) {
            echo sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos) . "<br>";
        }
    }
}
?>