<?php

  if(isset($_SESSION['register']) && $_SESSION['register'] != null){
      if($_SESSION['register'] == "complete") echo "<script>Swal.fire('Bien!!','Usuario registrado exitosamente!!','success')</script>";
      if($_SESSION['register'] == "failed") echo "<script>Swal.fire('Error','Algo salio mal, usuario no registado','error')</script>";
      Utils::deleteSession('register');
  }

?>

<h1>Registrarse</h1>

<form action="<?=base_url?>usuario/saved" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required placeholder="Ejemplo: carlos" />
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" required placeholder="ejemplo: Guzman" />

    <label for="email">Email</label>
    <input type="email" name="email" required placeholder="ejemplo: email@gmail.com" />
    
    <label for="password">Contraseña</label>
    <input type="password" name="password" required placeholder="ejemplo: #$1214sfa" />

    <input type="submit" value="Registrarse" />
</form>