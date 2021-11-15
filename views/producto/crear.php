<h1>Agregar Nuevo Producto</h1>

<form class="form" action="<?=base_url?>producto/save" enctype="multipart/form-data" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" placeholder="Galletas Can Can" required />

    <label for="descripcion">Descripción</label>
    <textarea name="descripcion"></textarea>

    <label for="precio">Precio</label>
    <input type="number" name="precio" placeholder="Galletas Can Can" step="any" required />

    <label for="stock">Stock</label>
    <input type="number" name="stock" placeholder="Galletas Can Can" />

    <?php $categories = Utils::showCAtegories(); ?>
    <label for="categoria_id">Categorias</label>
    <select name="categoria_id" required >
        <?php while ($ct = $categories->fetch_object()): ?>
        <option value="<?= $ct->id?>"><?= $ct->nombre?></option>
        <?php endwhile; ?>
    </select>

    <label for="stock">Imagen</label>
    <input type="file" name="imagen" required/>

    <input type="submit" value="Guardar" />
</form>