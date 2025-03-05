<?php
$host = "https://prueba.iesiz.com/"; // Servidor de la base de datos
$usuario = "jovalex1"; // Usuario de MySQL
$contrasena = "Jovalex11"; // Contraseña de MySQL
$base_datos = "IESIZPRUEBA"; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
