<h1>Agregar Nuevo Producto</h1>

<form class="form" action="<?=base_url?>producto/save" method="POST">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" placeholder="Galletas Can Can" />

  <label for="descripcion">Descripción</label>
  <textarea name="descripcion"></textarea>

  <label for="precio">Precio</label>
  <input type="number" name="precio" placeholder="Galletas Can Can" step="any" />

  <label for="stock">Stock</label>
  <input type="number" name="stock" placeholder="Galletas Can Can" />

  <?php $categories = Utils::showCAtegories(); ?>
  <select name="categoria_id">
      <?php while ($ct = $categories->fetch_object()): ?>
        <option value="<?= $ct->id?>" ><?= $ct->nombre?></option>
      <?php endwhile; ?>
  </select>

  <input type="submit" value="Guardar" />
</form>