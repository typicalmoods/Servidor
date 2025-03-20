<?php
// Crear una conexión desde php a mysql para mostrar datos y también
// para ingresarlos

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "mi_base";

// Conectar a una base de datos usando mysqli_connect
$conexion = mysqli_connect($servidor, $usuario, $clave, $base);

// Probar que la conexión sea correcta
if ($conexion) {
    die("Error de conexión:" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar usuarios</title>
</head>

<body>
    <h1>Insertar usuarios nuevos</h1>
    <form action="insertarUsuario.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave" required>
        <br>
        <input type="submit" value="insertar">
    </form>
</body>

</html>