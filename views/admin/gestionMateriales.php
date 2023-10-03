<ul>
    <li><a href="/gestion-productos" >Gestión de Productos</a></li>
    <li><a href="/gestion-materiales" class="active">>Gestión de Materiales</a></li>
    <li><a href="/logistica">Logistica</a></li>
</ul>

<h2>Gestor de Materiales</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Stock</th>
        <th>MatarialesCol</th>
    </tr>
    <?php foreach ($materiales as $material) : ?>
        <tr>
            <td><?php echo $material->id; ?></td>
            <td><?php echo $material->nombre; ?></td>
            <td><?php echo $material->stock; ?></td>
            <td><?php echo $material->materialescol; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
