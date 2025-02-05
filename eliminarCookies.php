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

    //Creamos el método de eliminación
    if (isset($_POST["borrar"])) {
        setcookie("usuario", "", time() - 3600);
        echo "La cookie se ha eliminado";
    } else {
        if (isset($_COOKIE["usuario"])) {
            echo "El usuario es " . $_COOKIE["usuario"] . "<br>";
        } else {
            echo "No hay usuario <br>";
        }
    }
    ?>
    <form method="post">
        <button type="submit" name="borrar">Borrar cookie</button>
    </form>
</body>

</html>