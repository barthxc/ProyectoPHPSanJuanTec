<ul>
    <li><a href="/gestion-productos" >Gestión de Productos</a></li>
    <li><a href="/gestion-materiales" >Gestión de Materiales</a></li>
    <li><a href="/logistica"class="active">>Logistica</a></li>
</ul>

<h2>Logistica</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>Tipo</th>
        <th>Cantidad</th>
        <th>Material</th>
    </tr>
    <?php foreach ($informes as $informe) : ?>
        <tr>
            <td><?php echo $informe->id; ?></td>
            <td><?php echo $informe->fecha; ?></td>
            <td><?php echo $informe->tipo; ?></td>
            <td><?php echo $informe->cantidad; ?></td>
            <td><?php echo $informe->materiales_nombre; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="/logistica" method="post">
    <table>
        <tr>
            <td><input type="submit" name="orden" value="Más vendido"></td>
            <td><input type="submit" name="orden" value="Menos vendido"></td>
        </tr>
    </table>
</form>

<form action="/logistica" method="get">
    <td><input type="submit" name="orden" value="Ver todos los registros"></td>
</form>