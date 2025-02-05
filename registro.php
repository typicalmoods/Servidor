<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$dbname = 'registro';
$username = 'root';
$password = ''; // Cambiar si tienes contraseña configurada en tu servidor local

try {
    // Crear conexión a la base de datos
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si el formulario fue enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        // Preparar la consulta SQL para insertar los datos
        $sql = "INSERT INTO usuarios (nombre, email, telefono, mensaje) VALUES (:nombre, :email, :telefono, :mensaje)";
        $stmt = $conn->prepare($sql);

        // Vincular los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':mensaje', $mensaje);

        // Ejecutar la consulta
        $stmt->execute();

        // Mensaje de éxito
        echo "<h1>Registro realizado con éxito</h1>";
        echo "<a href='registro_formulario.html'>Realizar otro registro</a>";
    }
} catch (PDOException $e) {
    // Mostrar error si algo falla
    echo "Error al conectar con la base de datos: " . $e->getMessage();
}
?>
