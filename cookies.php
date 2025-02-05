<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php
    //Crear cookie con nombre "usuario" y valor "Juan Pérez" y que due 1 hora (3600)
    
    setcookie("usuario", "Juan Pérez", time() + 3600, );

    //Comprobamos si existe
    if (isset($_COOKIE["usuario"])) {
        echo "El usuario guardado en la cookie es: " . $_COOKIE["usuario"];
    } else {
        echo "No existe la cookie de este usuario.";
    }

    //La primera vez que se accede a la página dirá que no existe pero al recargarla funcionará.
    //No se podrá volver a acceder al primer paso hasta que se borren las cookies de esa página.
    ?>
</body>

</html>