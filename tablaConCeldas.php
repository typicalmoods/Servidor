<?php
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

// Generar 8 filas
for ($i = 1; $i <= 8; $i++) {
    echo "<tr>"; // Inicia una nueva fila
    // Generar 9 celdas por fila
    for ($columna = 1; $columna <= 9; $columna++) {
        echo "<td>{$i}-{$columna}</td>"; // Contenido de la celda
    }
    echo "</tr>"; // Cierra la fila
}

echo "</table>";
?>