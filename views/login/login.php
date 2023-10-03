<h2>Inicia Sesión</h2>

<form action="/" method="post">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" placeholder="usuario">
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" placeholder="contraseña">

    <input type="submit" value="Ingresar">
</form>

<?php
var_dump($errores);
foreach ($errores as $error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endforeach;?>


<p>
  <a href="/registrar">¿No tienes una cuenta?. Registrate</a>
</p>
