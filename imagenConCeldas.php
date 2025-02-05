<?php
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

$imageCount = 5; // Número de imágenes disponibles
$imagePath = '../imagenes/'; // Ruta de las imágenes

// Generar 8 filas
for ($i = 1; $i <= 8; $i++) {
    echo "<tr>"; // Inicia una nueva fila
    // Generar 9 celdas por fila
    for ($columna = 1; $columna <= 9; $columna++) {
        $imageIndex = (($i - 1) * 9 + $columna - 1) % $imageCount + 1; // Ciclar imágenes
        echo "<td><img src='{$imagePath}imagen{$imageIndex}.jpg' height='100' width='100'></td>";
    }
    echo "</tr>"; // Cierra la fila
}

echo "</table>";
?>