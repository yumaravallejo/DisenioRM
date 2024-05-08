<?php
  session_start();
  include("conexion_db.php");
  //var_dump($_SESSION); --> te muestra lo que guarda la sesión
  if (isset($_SESSION['inicio']) && $_SESSION['inicio']) {
    $nombre = $_SESSION['name'];
    $contra = $_SESSION['password'];

    $consulta = "SELECT emailusuario FROM usuarios WHERE nomusuario = '$nombre' AND contrausuario = '$contra'";

    // Ejecutar la consulta
    $resultado = mysqli_query($conex, $consulta);

    if ($fila = mysqli_fetch_assoc($resultado)) {
      // Obtener el email del usuario
      $email = $fila['emailusuario'];
    } else {
      // Si no se encontraron resultados, mostrar un mensaje de error o redirigir al usuario
      echo "No se encontraron usuarios con el nombre y contraseña proporcionados.";
    }

  } else {
    header("Location: index.php");
    exit;
  }
?>

<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Real Madrid CF</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="img/iconos/css/font-awesome.min.css">
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

    <script src="js/app.js">
    </script>

</head>

<body>
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

    <div id="contenido-u">
        <div id="img-user">
            <img src="img/nom1.jpg" title="Foto de perfil de usuario" alt="Foto de perfil de usuario">
        </div>
        <div id="info-user">
            <span class="cont-h2">
                <img src="img/nom1.jpg" class="imagen-h2">
                <h2>¡Hola madridista!</h2>
            </span>
            <form method="post" action="usuario.php" class="formuser">
                <input id="nomuser" class="input" type="text" name="nombre-user"
                    title="Introduce un nuevo nombre si quieres cambiarlo" value="<?php echo $nombre; ?>"
                    placeholder="nombre de usuario" alt="Editar el nombre de usuario o verlo" required>
                <input id="correoTlfn" class="input" type="text" name="correo-tfno"
                    title="Introduce un nuevo correo o teléfono si quieres cambiarlo" value="<?php echo $email; ?>"
                    placeholder="correo electrónico o contraseña" alt="Editar el correo o teléfono o verlo" required>
                <input id="contra" class="in-final" type="password" name="contrasenia"
                    title="Introduce una nueva contraseña si quieres cambiarla" value="<?php echo $contra; ?>"
                    placeholder="contraseña" alt="Editar la contraseña o verla" required>
            <span class="mostrar">
                    <input type="checkbox" name="input_ver" value="ver" id="mostrar" onclick="mostrar_constra()">
                    <label for="mostrar">Mostrar Contraseña</label>
              </span>
                    <input type="submit" value="Aceptar cambios" title="Editar campos de usuario"
                    alt="Botón de aplicación de cambios" onclick="comprobarUs()" class="in-final pointer aceptarCambios">
            </form>
            <div class="eliminar">
                ¿Quieres darte de baja?
                <a href="eliminar.php" id="paco">Eliminar cuenta</a>
            </div>
        </div>
        <div id="Hala-madrid">
            <img src="img/hala-madrid.png" alt="Foto de Hala madrid" title="!Hala Madrid!">
        </div>
    </div>


    <div id="footer-r" class="navbar navbar-fixed-bottom">
            <div id="medio">
                <div id="redes"><img src="img/redes.png" /></div>
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


</body>


</html>