<?php
session_start();
//! Conexión con sql
$usuario_valido = "admin";
$clave_encriptada = password_hash("1234", PASSWORD_DEFAULT);
echo $clave_encriptada;

//!Recuperamos las variables del formulario
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    //!Validar el usuario
    if ($usuario === $usuario_valido && password_verify($clave, $clave_encriptada)) {
        $_SESSION["usuario"] = $usuario;
        header('Location: aplicacion.php?error=1');
        exit();
    } else {
        //! Fallo de login
        header('Location: login.php?error=1');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>