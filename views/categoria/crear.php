<h1>Crear nueva categoria</h1>

<form class="form" method="post" action="<?=base_url?>categoria/save" >
<label for="nombre" >Nombre</label>
<input type="text" name="nombre" placeholder="Nombre categoria" required />
<input type="submit" value="Guardar">
</form>