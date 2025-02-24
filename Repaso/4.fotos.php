<?php
// Suponiendo que las imágenes están en la carpeta "../ies"
$ies = scandir('../ies'); // Lee el contenido de la carpeta ies

// Recorre todas las imágenes encontradas
foreach ($ies as $i) {
    if ($i != '.' && $i != '..') { // Ignora los directorios . y ..
        echo "<img src='../ies/$i' height='100' width='100'>"; // Muestra la i
    }
}
?>