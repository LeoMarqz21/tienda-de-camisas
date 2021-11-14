<?php 
  $c = 1;
  if(isset($_SESSION['category']) && $_SESSION['category'] != null){
      if($_SESSION['category'] == 'saved') echo "<script>Swal.fire('Bien!!','categoria agregada exitosamente!!','success')</script>";
      Utils::deleteSession('category');
  }
?>

<h1>Gestionar Categorias</h1>
<a href="<?=base_url?>categoria/crear" class="btn-add-category">Agregar nueva categoria</a>
<table class="table-categories" >
    <thead>
        <tr>
            <th>Nº</th>
            <th>ID</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($ct = $categories->fetch_object()): ?>
            <tr>
                <td style="text-align:center;"><?= $c ?></td>
                <td style="text-align:center;">
                    <?= $ct->id ?>
                </td>
                <td style="text-align:center;">
                    <?= $ct->nombre ?>
                </td>
            </tr>
            <?php $c++; ?>
        <?php endwhile; ?>
    </tbody>
</table>