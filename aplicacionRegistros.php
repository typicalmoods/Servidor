<?php
// 1 sola página registra usuarios con roles
// además de loguear y cerrar sesión

session_start();

// Simulamos la base de datos pero con vectores
if (!isset($_SESSION["usuarios"])) {
    $_SESSION["usuarios"] = [];
}
//! Ponemos & porque así podremos modificar el valor de las variables sin tener
//! que volver a declararlas
$usuarios = &$_SESSION["usuarios"];

//Función para registrar los usuarios con rol y contraseña
function registrarUsuarios($nombre, $password, $rol, &$usuarios)
{
    if (isset($usuarios[$nombre])) {
        return "El usuario $nombre ya existe";
    }
    $passwordCifrado = password_hash($password, PASSWORD_DEFAULT);
    $usuarios[$nombre] = ["password" => $passwordCifrado, "rol" => $rol];
    return "Usuario $nombre registrado con éxito";
}
// Función para iniciar sesión
function iniciarSesion($nombre, $password, $usuarios)
{
    if (isset($usuarios[$nombre]) && password_verify($password, $usuarios[$nombre]["password"])) {
        $_SESSION["usuario"] = $nombre;
        $_SESSION["rol"] = $usuarios[$nombre]["rol"];
        return "Bienvenido $nombre . Tu rol es " . $_SESSION["rol"] . ".";
    }
    return "Usuario o contraseña incorrecta";
}

// Manejar los mensajes y los formularios
// Manejar los mensajes y los formularios
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["registrar"])) {
        $mensaje = registrarUsuarios($_POST["nombre"], $_POST["password"], $_POST["roles"], $usuarios);
    } else {
        if (isset($_POST["ingresar"])) {
            $mensaje = iniciarSesion($_POST["nombre"], $_POST["password"], $usuarios);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de roles</title>
</head>

<body>
    <h2>Registro de usuarios</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <select name="roles" required>
            <option value="Administrador">Administrador</option>
            <option value="Editor">Editor</option>
            <option value="Lector">Lector</option>
        </select>
        <button type="submit" name="registrar">Registrar</button>

    </form>
    <h2>Iniciar sesión</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit" name="ingresar">Ingresar</button>
    </form>
    <h3><?php echo $mensaje; ?></h3>
</body>

</html>