<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Iniciar sesión</h2>
    <form action="http://localhost/servidor/autenticacion.php" method="POST">
        <label>User</label>
        <input type="text" name="usuario" required><br>
        <label>Password</label>
        <input type="password" name="clave" required>
        <button type="submit">Ingresar</button>
    </form>

</body>

</html>