<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    <link rel="shortcut icon" href="<?=base_url?>assets/images/camiseta.png" type="image/x-icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Tienda Master</title>
</head>

<body>
    <div id="container">
        <!-- cabecera -->
        <header id="header">
            <idv id="logo">
                <img src="<?=base_url?>assets/images/camiseta.png" alt="Camiseta - Logo" title="Logo" />
                <a href="index.php" class="link">Tienda de camisetas</a>
            </idv>
        </header>
        <!-- menu -->
        <?php $categorias = Utils::showCAtegories(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="<?=base_url?>">Inicio</a>
                </li>
                <?php while($ct = $categorias->fetch_object()) : ?>
                    <li>
                        <a href="#"><?=$ct->nombre?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </nav>

        <!-- contenido -->
        <div id="content">