<h1>Menú de Gestión e Informes</h1>
    <ul>
        <li><a href="gestion_productos.php">Gestión de Productos</a></li>
        <li><a href="gestion_materiales.php" class="active">Gestión de Materiales</a></li>
        <li><a href="informes_estadisticas.php">Informes y Estadísticas</a></li>
    </ul>










<h1>Nombre: <?php 
        foreach ($users as $user) {
        echo $user->usuario;
        echo '<br>';
        }
?></h1>

