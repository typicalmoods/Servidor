<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tabla con una fila y cinco celdas</title>
    <style>
        /* Estilo de la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            /* Hace que los bordes no se dupliquen */
            background-color: #f0f0f0;
            /* Color de fondo para la tabla */
        }

        /* Estilo de las celdas */
        td {
            padding: 15px;
            /* Espacio dentro de las celdas */
            text-align: center;
            /* Centra el texto dentro de la celda */
            background-color: #ffeb3b;
            /* Color de fondo para las celdas */
            color: #333;
            /* Color del texto dentro de las celdas */
            border: 1px solid #333;
            /* Bordes de las celdas */
        }

        /* Estilo de la primera celda (opcional) */
        td:first-child {
            background-color: #4caf50;
            /* Color de fondo para la primera celda */
            color: white;
            /* Color de texto en la primera celda */
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<td>Celda $i</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>