<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === 'admin') {
                if ($password === '1234') {
                    echo '<h1>Usuario correcto</h1>';
                    echo '<a href="http://localhost/Cliente/ej1tienda.html">Tienda</a>';
                } else {
                    echo '<h1>Error en la contraseña</h1>';
                    echo '<a href="http://localhost/Cliente/ej1loguin.html">Atrás</a>';
                }
            } else {
                echo '<h1>Usuario no existe</h1>';
                echo '<a href="http://localhost/Cliente/ej1loguin.html">Atrás</a>';
            }
        } elseif (isset($_POST['vaper3000']) && isset($_POST['vaper1500']) && isset($_POST['liquido']) && isset($_POST['envio'])) {
            $vaper3000 = intval($_POST['vaper3000']);
            $vaper1500 = intval($_POST['vaper1500']);
            $liquido = intval($_POST['liquido']);
            $envio = $_POST['envio'];

            $precioVaper3000 = 40;
            $precioVaper1500 = 30;
            $precioLiquido = 1.50;
            $gastosEnvio = ($envio === '24h') ? 7 : 0;

            $subtotal = ($vaper3000 * $precioVaper3000) + ($vaper1500 * $precioVaper1500) + ($liquido * $precioLiquido) + $gastosEnvio;
            $totalIVA = $subtotal * 1.21;

            echo '<h1>Resumen del Pedido</h1>';
            echo '<p>Tiempo de envío: ' . ($envio === '24h' ? '24 horas' : '3 semanas') . '</p>';
            echo '<p>Productos seleccionados:</p>';
            echo '<ul>';
            echo '<li>Vaper 3000mAh: ' . $vaper3000 . '</li>';
            echo '<li>Vaper 1500mAh: ' . $vaper1500 . '</li>';
            echo '<li>Líquidos: ' . $liquido . '</li>';
            echo '</ul>';
            echo '<p>Subtotal sin IVA: ' . number_format($subtotal, 2) . '€</p>';
            echo '<p>Total con IVA: ' . number_format($totalIVA, 2) . '€</p>';
        } else {
            echo '<h1>Error: Datos no válidos</h1>';
            echo '<a href="http://localhost/Cliente/ej1loguin.html">Atrás</a>';
        }
    }
    ?>
</body>
</html>