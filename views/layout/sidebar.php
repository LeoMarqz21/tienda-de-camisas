<!-- barra lateral -->
<aside id="lateral">
    <div id="login" class="block_aside">
        <?php if(!isset($_SESSION['identity'])): ?>
        <form class="form_sidebar" action="<?=base_url?>usuario/login" method="POST">
            <h3>Entrar a la web</h3>
            <label for="email">Email</label>
            <input type="email" class="input" name="email" placeholder="ejemplo: email@gmail.com" />

            <label for="password">Password</label>
            <input type="password" class="input" name="password" placeholder="ejemplo: #$1214sfaasdf" />

            <input type="submit" value="Enviar" />
        </form>
        <?php else: ?>
        <h3><?= $_SESSION['identity']->nombre . " " . $_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>

        <ul>
            <?php if(isset($_SESSION['admin'])): ?>
            <li>
                <a href="<?= base_url?>categoria/index" class="link">Gestionar categorias</a>
            </li>

            <li>
                <a href="<?= base_url?>producto/gestion" class="link">Gestionar productos</a>
            </li>
            <li>
                <a href="#" class="link">Gestionar pedidos</a>
            </li>
            <?php endif; ?>
            <?php if(isset($_SESSION['identity'])): ?>
            <li>
                <a href="#" class="link">Mis pedidos</a>
            </li>
            <li class="li-close-session">
                <a class="close-session" href="<?=base_url?>usuario/logout">Cerrar Sección</a>
            </li>
            <?php else: ?>
            <li class="li-register">
                <a href="<?=base_url?>usuario/registro" class="register">Registrarme</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>

<!-- contenido principal -->
<div id="central">