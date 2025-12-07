<?php
$host = 'localhost';
$dbname = 'tienda_usuarios';
$username = 'root';  // Cambia si tienes otro usuario
$password = '';      // Cambia si tienes otra contraseña

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
