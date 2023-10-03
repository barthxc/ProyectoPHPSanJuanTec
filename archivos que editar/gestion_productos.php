<?php
// Conexión a la base de datos (debes reemplazar 'tu_usuario', 'tu_contraseña' y 'tu_base_de_datos' con los valores correctos)
$conexion = new mysqli('localhost:3308', 'root', '', 'gestor');

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener la lista de productos
$resultado = $conexion->query("SELECT * FROM Productos");
if (!$resultado) {
    die("Error al obtener productos: " . $conexion->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestión de Productos</h1>
    <ul>
        <li><a href="gestion_productos.php" class="active">Gestión de Productos</a></li>
        <li><a href="gestion_materiales.php">Gestión de Materiales</a></li>
        <li><a href="informes_estadisticas.php">Informes y Estadísticas</a></li>
        <li><a href="seguridad.php">Seguridad</a></li>
    </ul>
    <div class="container">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Talle</th>
            <th>Stock</th>
            <th>Categoría</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $fila['id'] ?></td>
                <td><?= $fila['nombre'] ?></td>
                <td><?= $fila['talle'] ?></td>
                <td><?= $fila['stock'] ?></td>
                <td><?= $fila['categorias_id'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    </div>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conexion->close();
?>
