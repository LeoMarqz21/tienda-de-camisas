
<h1>Registrarse</h1>

<form action="<?=base_url?>usuario/saved" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" autocomplete="off" required />
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" autocomplete="off" required />

    <label for="email">Email</label>
    <input type="email" name="email" autocomplete="off" required />
    
    <label for="password">Contraseña</label>
    <input type="password" name="password" autocomplete="off" required />

    <input type="submit" value="Registrarse" />
</form>