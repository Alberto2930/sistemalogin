<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena']; // Aquí usabas "password" en lugar de "contrasena"

    // Verifica que las variables contienen datos
    if (empty($usuario) || empty($contrasena)) {
        die("Los campos no pueden estar vacíos.");
    }

    // Consulta para buscar el usuario
    $sql = "SELECT id, usuario, password FROM usuarios WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();

        // Verifica si la contraseña es correcta
        if (password_verify($contrasena, $fila['password'])) {
            $_SESSION['usuario'] = $fila['usuario'];

            // Redirige al dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // Si la contraseña es incorrecta, muestra mensaje de error
            echo "<script>alert('Contraseña incorrecta'); window.location.href='index.php';</script>";
            exit();
        }
    } else {
        // Si el usuario no existe, muestra mensaje de error
        echo "<script>alert('Usuario no encontrado'); window.location.href='index.php';</script>";
        exit();
    }

    $stmt->close();
    $conexion->close();
}
?>
