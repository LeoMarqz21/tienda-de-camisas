<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tienda Master</title>
</head>

<body>
    <div id="container">
        <!-- cabecera -->
        <header id="header">
            <idv id="logo">
                <img src="assets/images/camiseta.png" alt="Camiseta - Logo" title="Logo" />
                <a href="index.php">Tienda de camisetas</a>
            </idv>
        </header>
        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categorias 1</a>
                </li>
                <li>
                    <a href="#">Categorias 2</a>
                </li>
                <li>
                    <a href="#">Categorias 3</a>
                </li>
                <li>
                    <a href="#">Categorias 4</a>
                </li>
                <li>
                    <a href="#">Categorias 5</a>
                </li>
            </ul>
        </nav>

        <!-- contenido -->
        <div id="content">
            <!-- barra lateral -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form class="form" action="#" method="POST">
                        <h3>Entrar a la web</h3>
                        <label for="email">Email</label>
                        <input type="email" class="input" name="emial" />

                        <label for="password">Password</label>
                        <input type="password" class="input" name="password" />

                        <input type="submit" value="Enviar" />
                    </form>

                    <ul>
                        <li>
                            <a href="#">Mis pedidos</a>
                        </li>
                        <li>
                            <a href="#">Gestionar pedidos</a>
                        </li>
                        <li>
                            <a href="#">Gestionar categorias</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- contenido principal -->
            <div id="central">
                <h1>Productos destacados</h1>
                <div class="product">
                    <img src="assets/images/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>Precio: 30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/images/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>Precio: 30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/images/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>Precio: 30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/images/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>Precio: 30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/images/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>Precio: 30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/images/camiseta.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>Precio: 30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
        </div>
        <footer id="footer">
            <p>Desarrollado por LeoMarqz &copy; 2021 - Creditos Victor Robles</p>
        </footer>
    </div>

</body>

</html>