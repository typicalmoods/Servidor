<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar cookies</title>
</head>

<body>
    <?php
    //Creamos una página donde se almacene una cookie y un botón para eliminarlas
    setcookie("usuario", "Juan", time() + 3600);
    
    ?>
</body>

</html>