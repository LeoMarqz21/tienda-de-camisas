<h1>Productos destacados</h1>

<?php while($pd = $products->fetch_object()): ?>

<div class="product">
    <img src="<?= $pd->imagen?>" />
    <h2><?= $pd->nombre ?></h2>
    <p>Precio: $<?=$pd->precio?></p>
    <a href="#" class="button">Comprar</a>
</div>

<?php endwhile; ?>