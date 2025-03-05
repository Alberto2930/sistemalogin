<?php
$servername = "https://prueba.iesiz.com/"; // Nombre del servidor
$username = "jovalex1";        // Nombre de usuario
$password = "Jovalex11";            // Contraseña
$dbname = "IESIZPRUEBA"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

// Consulta SQL
$sql = "SELECT id, nombre, email FROM usuarios";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>
