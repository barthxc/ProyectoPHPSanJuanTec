<!DOCTYPE html>
<html>
<head>
    <title>FashionTextil - Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Comprobar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            
            // Conectar a la base de datos
            $conexion = new mysqli('localhost:3308', 'root', '', 'gestor');

            if ($conexion->connect_error) {
                die("Error de conexión a la base de datos: " . $conexion->connect_error);
            }

            // Consulta para verificar si el usuario existe
            $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND contraseña = ?");
            $consulta->bind_param("ss", $usuario, $contrasena);
            $consulta->execute();
            $resultado = $consulta->get_result();

            if ($resultado->num_rows > 0) {
                echo '<h1>Bienvenido a la plataforma</h1>';
                echo '<ul>
                        <li><a href="gestion_productos.php">Gestión de Productos</a></li>
                        <li><a href="gestion_materiales.php">Gestión de Materiales</a></li>
                        <li><a href="informes_estadisticas.php">Informes y Estadísticas</a></li>
                        <li><a href="seguridad.php">Seguridad</a></li>
                    </ul>';
            } else {
                echo '<h1>Usuario incorrecto</h1>';
            }

            // Cerrar la conexión a la base de datos
            $conexion->close();
        }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
