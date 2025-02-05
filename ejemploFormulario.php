<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer ejemplo</title>
</head>
<body>
    <h1>Este ejemplo es para mi primer formulario </h1><br>

    <?php
        $hola = $_POST["parametro1"];
        $mundo = $_POST["parametro2"];

        echo "¡ $hola  $mundo !";
    ?>
</body>
</html>