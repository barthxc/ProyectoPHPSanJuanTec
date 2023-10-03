<?php
// Conexión a la base de datos (debes reemplazar 'tu_usuario', 'tu_contraseña' y 'tu_base_de_datos' con los valores correctos)
$conexion = new mysqli('localhost:3308', 'root', '', 'gestor');

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Aquí puedes agregar la lógica para generar los informes y estadísticas
// Por ejemplo, puedes realizar consultas SQL y mostrar los resultados en una tabla
$resultado = $conexion->query("SELECT * FROM registros_productos");
if (!$resultado) {
    die("Error al obtener registros de productos: " . $conexion->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informes y Estadísticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Informes y Estadísticas</h1>
    <ul>
        <li><a href="gestion_productos.php">Gestión de Productos</a></li>
        <li><a href="gestion_materiales.php">Gestión de Materiales</a></li>
        <li><a href="informes_estadisticas.php" class="active">Informes y Estadísticas</a></li>
        <li><a href="seguridad.php">Seguridad</a></li>
    </ul>
    <div class="container">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Productos Nombre</th>
            <th>Producto Talle</th>
            <th>Categoría</th>
            <th>Productos ID</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $fila['id'] ?></td>
                <td><?= $fila['fecha'] ?></td>
                <td><?= $fila['cantidad'] ?></td>
                <td><?= $fila['productos_nombre'] ?></td>
                <td><?= $fila['productos_talle'] ?></td>
                <td><?= $fila['categoria'] ?></td>
                <td><?= $fila['Productos_id'] ?></td>
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
