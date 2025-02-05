<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>

<body>
    <?php
    //Debes crear un contador que sume todos los números pares desde el 1 hasta el 100
    $contador = 0;
    for ($i = 0; $i < 101; $i++) {
        if ($i % 2 == 0) {
            $contador = $contador + $i;
            //$contador += $i;
        }
    }
    echo "La suma de todos los pares.. es: " . $contador;
    ?>
</body>

</html>