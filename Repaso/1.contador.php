<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>

<body>
    <?php
    $suma = 0;
    for ($i = 2; $i <= 100; $i += 2) {
        $suma += $i;
    }
    echo $suma;
    ?>
</body>

</html>