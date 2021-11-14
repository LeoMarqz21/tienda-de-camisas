<h1>Gestion de productos</h1>

<a href="<?=base_url?>producto/crear" class="btn-add-category">Agregar nuevo producto</a>
<table class="table-gestion" >
    <thead>
        <tr>
            <th>Nº</th>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>STOCK</th>
            <th>ACCION</th>
        </tr>
    </thead>
    <tbody>
        <?php $c=1; while ($pd = $products->fetch_object()): ?>
            <tr>
                <td><?= $c ?></td>
                <td>
                    <?= $pd->id ?>
                </td>
                <td>
                    <?= $pd->nombre ?>
                </td>
                <td>
                    <?= $pd->descripcion ?>
                </td>
                <td>
                    <?= $pd->precio ?>
                </td>
                <td>
                    <?= $pd->stock ?>
                </td>
                <td>
                    <form action="<?=base_url?>producto/delete" method="POST" >
                      <input type="hidden" name="id" value="<?= $pd->id?>" />
                      <button type="submit" class="btn-delete"> <i class='bx bxs-tag-x'></i></button> 
                    </form>
                </td>
                
            </tr>
            <?php $c++; ?>
        <?php endwhile; ?>
    </tbody>
</table>