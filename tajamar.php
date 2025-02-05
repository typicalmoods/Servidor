<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tajamar Web</title>
</head>
<body>
    <?php
    // Establecer la conexión a la base de datos
    $mysqli = new mysqli('localhost', 'ann', '1234', 'tajamar');
    // Verificar la conexión
    if($mysqli->connect_error) {
        echo "El sitio web al que intenta acceder no está funcionando";
        exit;
    }
    // Realizar la consulta SQL
    $consulta_sql = "SELECT * FROM estudiantes";
    // Ejecutar la consulta
    $resultado_consulta = $mysqli->query($consulta_sql);
    // Verificar si hay errores en la consulta
    if(!$resultado_consulta) {
        echo "Lamento informarle de que su consulta no es correcta";
        exit;
    }
    // Mostrar los resultados en una tabla HTML
    echo "<table>
            <tr>
                <td>id_estudiante</td>
                <td>nombre</td>
                <td>apellido</td>
                <td>procedencia</td>
                <td>fecha_ingreso</td>
            </tr>";

    while($resultado_por_registro = $resultado_consulta->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $resultado_por_registro['id_estudiante'] . "</td>";
        echo "<td>" . $resultado_por_registro['nombre'] . "</td>";
        echo "<td>" . $resultado_por_registro['apellido'] . "</td>";
        echo "<td>" . $resultado_por_registro['procedencia'] . "</td>";
        echo "<td>" . $resultado_por_registro['fecha_ingreso'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Cerrar la conexión
    $mysqli->close();
    ?>
</body>
</html>