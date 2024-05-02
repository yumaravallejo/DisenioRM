<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Real Madrid CF</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>

<div id="contenedor-u">

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
            <li class="nav-item"><a href="index.php" class="nav-link" title="Ir al índice">INICIO</a></li>
            <li class="nav-item"><a href="registro.php" class="nav-link" title="Crear o Unirse a tu cuenta">HAZTE
              SOCIO</a></li>
            <li class="nav-item"><a href="competicion.php" class="nav-link" title="Ver competiciones y clasificación">COMPETICIONES</a>
            </li>
            <li class="nav-item"><a href="tienda.php" class="nav-link" title="Tienda Oficial">TIENDA</a></li>
          </ol>
        </nav>

        <!-- Menú pequeño (Hamburguesa) -->
        <nav class="offScreenMenu" id="burger">
          <ol class="lista-off">
            <li class="item-off"><a href="index.php" class="link-off" title="Ir al índice">INICIO</a></li>
            <li class="item-off"><a href="registro.php" class="link-off" title="Crear o Unirse a tu cuenta">HAZTE
              SOCIO</a></li>
            <li class="item-off"><a href="competicion.php" class="link-off" title="Ver competiciones y clasificación">COMPETICIONES</a>
            </li>
            <li class="item-off, last"><a href="tienda.php" class="link-off" title="Tienda Oficial">TIENDA</a></li>
          </ol>
        </nav>

        <!-- Barra de búsqueda -->
        <div id="busq-user-car">
          <ol>
            <li>
              <form>
                <input type="text" name="busqueda" id="busqueda" alt="buscar" title="Buscar Productos/Apartado"
                       placeholder="Buscar...">
              </form>
            </li>
            <li><a href="#" onclick="ponerHola()" title="Carrito de compras"><img class="abajo"
                                                                                  src="img/icons8-carrito-de-compras-26.png"/></a>
            </li>
            <li><a href="usuario.html" title="Perfil de usuario"><img
              src="img/icons8-usuario-masculino-en-círculo-26.png"/></a></li>
          </ol>
        </div>
      </div>
    </div>
  </header>


  <div id="contenido-u">
      <div id="img-user">
        <img src="img/nom1.jpg" title="Foto de perfil de usuario" alt="Foto de perfil de usuario">
        <div id="editado">Cambios realizados satisfactoriamente</div>
      </div>
      <div id="info-user">
        <span class="cont-h2">
          <img src="img/nom1.jpg" class="imagen-h2">
          <h2>¡Hola madridista!</h2>
        </span>
        <form method="post" action="usuario.html" class="formuser">
          <input id="nomuser" type="text" name="nombre-user" title="Introduce un nuevo nombre si quieres cambiarlo"
                 value="@nomuser" placeholder="nombre de usuario" alt="Editar el nombre de usuario o verlo" required>
          <input id="correoTlfn" type="text" name="correo-tfno" title="Introduce un nuevo correo o teléfono si quieres cambiarlo"
                 value="@correo-tfno" placeholder="correo electrónico o contraseña" alt="Editar el correo o teléfono o verlo" required>
          <input id="contra" type="password" name="contrasenia" title="Introduce una nueva contraseña si quieres cambiarla"
                 value="@password" placeholder="contraseña" alt="Editar la contraseña o verla" required>
          <input onclick="comprobarUs()" type="submit" value="Aceptar cambios" title="Editar campos de usuario" alt="Botón de aplicación de cambios">
        </form>
      </div>
      <div id="Hala-madrid">
        <img src="img/hala-madrid.png" alt="Foto de Hala madrid" title="!Hala Madrid!">
      </div>
    </div>
  </div>

  <div id="footer">
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

<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous">
</script>

<script src="js/app.js">
</script>
</body>


</html>