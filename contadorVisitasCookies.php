<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas por cookies</title>
</head>

<body>
    <?php
    //Creamos un contador para ver cuantas veces se ha visitado el sitio si no existe la cookie
    if (isset($_COOKIE["contador"])) {
        //Por cada vez que recarguemos la página añadirá una cookie
        $contador = ($_COOKIE["contador"] + 1);
    } else {
        //Si ni había cookies antes se inicializa en 1
        $contador = 1;
    }
    //Guardar la variable por 1 día
    setcookie("contador", $contador, time() + 86400);

    //Mostrar el contador al usuario
    echo "Has visitado esta página " . $contador . " veces";
    ?>
</body>

</html>