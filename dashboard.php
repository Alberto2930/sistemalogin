<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            background-color: #f4f4f4;
        }

        /* Contenedor principal */
        .dashboard-container {
            display: flex;
            flex: 1;
        }

        /* Menú lateral */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
        }

        /* Contenido principal */
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
        }

        /* Menú superior */
        .topbar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .topbar .icon {
            font-size: 20px;
            margin-left: 15px;
            cursor: pointer;
            color: #2c3e50;
            transition: color 0.3s;
        }

        .topbar .icon:hover {
            color: #3498db;
        }

        /* Estilos para el contenido */
        .main-content h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .main-content p {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Menú superior -->
    <div class="topbar-right">
        <div class="icon">🔔</div> <!-- Ícono de notificaciones -->
        <div class="icon">⚙️</div> <!-- Ícono de configuración -->
        <div class="icon">👤</div> <!-- Ícono de perfil -->
    </div>




<!-- submenu -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú con Submenú</title>
    <style>
        /* Estilos del menú principal */
        .menu {
            list-style: none;
            padding: 0;
            background: #333;
            display: flex;
        }

        .menu > li {
            position: relative;
        }

        .menu > li > a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
        }

        .menu > li:hover {
            background: #444;
        }

        /* Estilos del submenú */
        .submenu {
            list-style: none;
            padding: 0;
            position: absolute;
            top: 100%;
            left: 0;
            background: #444;
            display: none;
            min-width: 150px;
        }

        .submenu li a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        .submenu li a:hover {
            background: #555;
        }

        /* Mostrar submenú al pasar el mouse */
        .menu > li:hover .submenu {
            display: block;
        }
    </style>
</head>
<body>



    <!-- Contenedor principal -->
    <div class="dashboard-container">
        <!-- Menú lateral -->
        <div class="sidebar">
            <h2>Menú</h2>
            <ul>
                <li><a href="Usuarios">Usuarios</a></li>
                        <ul class="submenu">
                        <li><a href="#">Diseño Web</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">SEO</a></li>
                        </ul>
                <li><a href="#">Niveles</a></li>
                <li><a href="#">Grados Grupos</a></li>
                <li><a href="#">Periodos</a></li>
                <li><a href="#">Alumnos</a></li>
                <li><a href="#">Tutor</a></li>
                <li><a href="#">Profesores</a></li>
                <li><a href="#">Directivos</a></li>
                <li><a href="#">Control Escolar</a></li>
                <li><a href="#">Prefectura</a></li>
                <li><a href="#">Operacion</a></li>
                <li><a href="#">Materias</a></li>
                <li><a href="#">Asistencia</a></li>
                <li><a href="#">Calificaciones</a></li>
                <li><a href="#">Examenes</a></li>
                <li><a href="#">Video Share</a></li>
                <li><a href="#">Archivo Electronico</a></li>
                <li><a href="#">LMS</a></li>
                <li><a href="#">Area de Descarga</a></li>
                <li><a href="#">Matriculas Alumnos</a></li>
                <li><a href="#">Horarios</a></li>
                <li><a href="#">Planeacion Profesores</a></li>
                <li><a href="#">Encuestas</a></li>
                <li><a href="#">Asistencia QR</a></li>
            </ul>
        </div>

        <!-- Contenido principal -->
        <div class="main-content">
            <h1>Bienvenido al Dashboard</h1>
            <p>Selecciona una opción del menú lateral para comenzar.</p>
        </div>
    </div>









    <style>
    /* Estilos del pie de página */
        footer {
            background: blue;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

    <!-- Pie de Página -->
<footer>
    &copy; 2025 Equipo Desarrollo IESIZ 
    - Todos los derechos reservados
</footer>

</body>
</html>

