<?php
// Imprimir las tablas de multiplicar del 1 al 10 en un navegador
for ($i = 1; $i <= 10; $i++) {
    echo "Tabla del $i:<br>";
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado<br>";
    }
    echo "<br>"; // Salto de línea entre tablas
}
?>