
<h2>Crea una cuenta</h2>
<h3>Formulario Registro</h3>
<form action="/registrar" method="POST">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" value="<?php echo$usuario->usuario ;?>">
    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo$usuario->email ;?>">
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" >

    <input type="submit" value="Crear Cuenta">
</form>

<?php
foreach ($errores as $error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endforeach;?>


<p>
    <a href="/">¿Tienes cuenta?. Inicia Sesión</a>
</p>