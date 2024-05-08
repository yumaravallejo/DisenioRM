<header>
    <div class="header-cont">
        <div class="cabecera">
            <div id="logo-madrid"><img src="img/escudo.png"></div>
            <div id="texto-madrid">
                <h1>REAL MADRID CF</h1>
            </div>
            <div id="logo-adidas"><img src="img/adidog.png"></div>
        </div>
        <div id="menu-in">
            <!-- Icono de hamburguesa (oculto) -->
            <div class="hamburguer-menu" id="burger-menu" onclick="mostrarMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <!-- Menú normal (Pantalla Grande) -->
            <nav id="nav">
                <ol class="nav-list">
                    <li class="nav-item"><a href="index.php" class="nav-link" title="Ir al índice">INICIO</a></li>
                    <li class="nav-item"><a href="competicion.php" class="nav-link"
                            title="Ver competiciones y clasificación">COMPETICIONES</a>
                    </li>
                    <li class="nav-item"><a href="tienda.php" class="nav-link" title="Tienda Oficial">TIENDA</a>
                    </li>
                </ol>
            </nav>

            <!-- Menú pequeño (Hamburguesa) -->
            <nav class="offScreenMenu" id="burger">
                <ol class="lista-off">
                    <li class="item-off"><a href="index.php" class="link-off" title="Ir al índice">INICIO</a></li>
                    <li class="item-off"><a href="competicion.php" class="link-off"
                            title="Ver competiciones y clasificación">COMPETICIONES</a>
                    </li>
                    <li class="item-off, last"><a href="tienda.php" class="link-off" title="Tienda Oficial">TIENDA</a>
                    </li>
                </ol>
            </nav>

            <!-- Barra de búsqueda -->
            <div id="busq-user-car">
                <ol>
                    <li>
                        <form>
                            <input type="text" name="busqueda" id="busqueda" alt="buscar"
                                title="Buscar Productos/Apartado" placeholder="Buscar...">
                        </form>
                    </li>
                    <li><a href="#" onclick="ponerHola()" title="Carrito de compras"><img class="abajo"
                                src="img/icons8-carrito-de-compras-26.png" /></a>
                    </li>
                    <li><a href="usuario.php" title="Perfil de usuario"><img
                                src="img/icons8-usuario-masculino-en-círculo-26.png" /></a></li>
                </ol>
            </div>
        </div>
    </div>
</header>