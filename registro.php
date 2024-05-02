<!doctype html>
<html class="no-js" lang="es" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Real Madrid CF</title>
  <link href="css/style.css" rel="stylesheet">
  <meta content="" name="description">

  <meta content="" property="og:title">
  <meta content="" property="og:type">
  <meta content="" property="og:url">
  <meta content="" property="og:image">
  <meta content="" property="og:image:alt">

  <link href="/favicon.ico" rel="icon" sizes="any">
  <link href="/icon.svg" rel="icon" type="image/svg+xml">
  <link href="icon.png" rel="apple-touch-icon">

  <link href="site.webmanifest" rel="manifest">
  <meta content="#fafafa" name="theme-color">
</head>

<body>

<div id="contenedor">

  <header>
    <div class="header-cont">
      <div class="cabecera">
        <div id="logo-madrid"><img src="img/escudo.png"></div>
        <div class="en-blanco"></div>
        <div id="texto-madrid"><h1>REAL MADRID CF</h1></div>
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
            <li class="nav-item"><a class="nav-link" href="index.php" title="Ir al índice">INICIO</a></li>
            <li class="nav-item"><a class="nav-link" href="registro.php" title="Crear o Unirse a tu cuenta">HAZTE
              SOCIO</a></li>
            <li class="nav-item"><a class="nav-link" href="competicion.php" title="Ver competiciones y clasificación">COMPETICIONES</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="tienda.php" title="Tienda Oficial">TIENDA</a></li>
          </ol>
        </nav>

        <!-- Menú pequeño (Hamburguesa) -->
        <nav class="offScreenMenu" id="burger">
          <ol class="lista-off">
            <li class="item-off"><a class="link-off" href="index.php" title="Ir al índice">INICIO</a></li>
            <li class="item-off"><a class="link-off" href="registro.php" title="Crear o Unirse a tu cuenta">HAZTE
              SOCIO</a></li>
            <li class="item-off"><a class="link-off" href="competicion.php" title="Ver competiciones y clasificación">COMPETICIONES</a>
            </li>
            <li class="item-off, last"><a class="link-off" href="tienda.php" title="Tienda Oficial">TIENDA</a></li>
          </ol>
        </nav>

        <!-- Barra de búsqueda -->
        <div id="busq-user-car">
          <ol>
            <li>
              <form>
                <input alt="buscar" id="busqueda" name="busqueda" placeholder="Buscar..."
                       title="Buscar Productos/Apartado"
                       type="text">
              </form>
            </li>
            <li><a href="#" onclick="ponerHola()" title="Carrito de compras"><img class="abajo"
                                                                                  src="img/icons8-carrito-de-compras-26.png"/></a>
            </li>
            <li><a href="usuario.php" title="Perfil de usuario"><img
              src="img/icons8-usuario-masculino-en-círculo-26.png"/></a></li>
          </ol>
        </div>
      </div>
    </div>
  </header>


  <div id="contenido-r" class="moverArriba">
    <h2>CREAR CUENTA</h2>
    <form action="index.php" class="formcrear" method="post" name="elformulario">
      <input alt="Introduce un nombre de usuario" name="nomuser" placeholder="Nombre de usuario" required
             title="Introduce un nombre de usuario" type="text" value=""><br>
      <input alt="Introduce un correo o teléfono" name="correoTlfn" placeholder="Correo electrónico o teléfono"
             required title="Introduce un correo o teléfono" type="text" value=""><br>
      <span id="passwd_sitio">
              <input alt="Introduce un nombre de usuario" name="input_pass" placeholder="Contraseña" required
                     title="Introduce una contraseña" type="password" value="">
                </span>

      <div id="preguntas">
              <span class="verificar">
                    <input id="mostrar" name="input_ver" onclick="ver_password()" type="checkbox" value="ver">
                    <label for="mostrar">Mostrar Contraseña</label>
              </span>
        <div class="socio">
          <span>¿Ya eres socio? </span>
          <a href="login.php">Unirse</a>
        </div>
      </div>
      <input class="boton-cont" name="continuar" type="submit" value="continuar">
    </form>

  </div>

  <div class="navbar navbar-fixed-bottom" id="footer-r">
    <div id="medio">
      <div id="redes"><img src="img/redes.png"/></div>
      <div id="terminos-demas">
        <ol>
          <li><a href="terminos.html">Terms</a></li>
          <li><a href="privacy.html">Privacy</a></li>
          <li><a href="security.html">Security</a></li>
          <li><a href="status.html">Status</a></li>
          <li><a href="docs.html">Docs</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ol>
      </div>
      <div id="copyright-terms">&copy 2024 Copyright Real Madrid CF</div>
    </div>
  </div>
</div>


<script>

</script>

<script src="js/app.js"></script>
</body>


</html>