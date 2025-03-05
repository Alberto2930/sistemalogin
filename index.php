<?php
$host = "localhost"; // Servidor de la base de datos
$usuario = "root"; // Usuario de MySQL
$contrasena = ""; // Contraseña de MySQL
$base_datos = "sistema_login"; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        /* Contenedor del login */
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        /* Título */
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Campos de entrada */
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-color: #6a11cb;
        }

        /* Botón de ingreso */
        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-container input[type="submit"]:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        /* Enlaces adicionales */
        .login-container .options {
            margin-top: 20px;
        }

        .login-container .options a {
            display: block;
            margin: 10px 0;
            color: #6a11cb;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .login-container .options a:hover {
            color: #2575fc;
        }

        /* Mensaje de error */
        .error-message {
            color: #ff4d4d;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="login.php">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <input type="submit" value="Ingresar">
        </form>
        <div class="options">
            <a href="#">¿Olvidaste tu contraseña?</a>
            <a href="registar_usuario.php">Registrarse</a>
        </div>
        <?php if (isset($error) && !empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
