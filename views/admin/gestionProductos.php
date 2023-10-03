<ul>
    <li><a href="/gestion-productos" class="active">>Gestión de Productos</a></li>
    <li><a href="/gestion-materiales">Gestión de Materiales</a></li>
    <li><a href="/logistica">Logistica</a></li>
</ul>

<h2>Gestor de Productos</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Talle</th>
        <th>Stock</th>
        <th></th>

    </tr>
    <?php foreach ($productos as $producto) : ?>
        <tr>
            <td><?php echo $producto->id; ?></td>
            <td><?php echo $producto->nombre; ?></td>
            <td><?php echo $producto->talle; ?></td>

            <!-- STOCK -->
            <td class="alerta-stock <?php
                                    if ($producto->stock <= 15) {
                                        echo 'stock-bajo';
                                    } elseif ($producto->stock <= 40) {
                                        echo 'stock-medio';
                                    } elseif ($producto->stock > 40) {
                                        echo 'stock-ok';
                                    } else {
                                        echo 'stock-desconocido'; // Si no se cumple ninguna de las condiciones anteriores
                                    }
                                    ?>"><?php echo $producto->stock; ?></td>

            <td>
                <form action="/gestion-productos" method="post">
                    <input type="hidden" name="action" value="<?php echo $producto->id; ?>">
                    <button type="submit">+10</button>
                </form>
            </td>

        </tr>
    <?php endforeach; ?>

</table>

<form action="/gestion-productos">
    <fieldset>
        BUSCAR POR:
        <label for="categoria">CATEGORIAS</label>
        <select name="categoria" id="categoria">
            <option value="todas">TODAS</option>
            <option value="1">CAMISETA</option>
            <option value="2">PANTALONES</option>
            <option value="3">CHAQUETAS</option>
        </select>
        <label for="talle">TALLE</label>
        <select name="talle" id="talle">
            <option value="todas">TODAS</option>
            <option value="32">32</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </fieldset>
    <input type="hidden" name="action" value="detalleProductos">

    <input type="submit" value="Buscar">
</form>