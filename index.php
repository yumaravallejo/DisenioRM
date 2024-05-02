<!doctype html>
<html class="no-js" lang="es" >

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


<div id="contenedor">

  <header>
    <div class="header-cont">
      <div class="cabecera">
        <div id="logo-madrid"><img src="img/escudo.png"></div>
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

  <div id="contenido">
      <h2>Noticias</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a gravida mi, in posuere lacus. Vestibulum
        auctor elit volutpat augue vehicula facilisis. Orci varius natoque penatibus et magnis dis parturient montes,
        nascetur ridiculus mus. Nam fringilla sem magna, a facilisis est egestas in. Aenean sed nibh eget lacus sagittis
        accumsan. Quisque blandit, neque eu commodo luctus, quam odio malesuada augue, vel tempus diam leo eget nibh.
        Maecenas sollicitudin placerat molestie. Ut viverra maximus nibh ut consectetur. Vivamus sed elit et elit
        sagittis mattis.

        Curabitur consequat tellus sit amet diam pharetra, sed blandit justo consectetur. Nam id lacinia diam, ut
        iaculis lectus. Pellentesque sed nisl non libero sagittis ultricies. Nam luctus sodales aliquet. Duis hendrerit
        justo dignissim blandit suscipit. Nulla lorem lorem, euismod quis diam nec, egestas ullamcorper ipsum. Lorem
        ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Phasellus pulvinar vitae ex eget dictum.
        Donec consectetur quam sapien, nec facilisis libero elementum eu. Nunc efficitur justo vel est hendrerit
        sollicitudin. Integer nisl felis, bibendum sed turpis quis, ultrices malesuada felis. Orci varius natoque
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla quis dolor non velit ornare elementum
        sit amet quis magna. Suspendisse semper turpis posuere nisi ultrices convallis. Suspendisse pharetra efficitur
        rhoncus.

        Aliquam interdum, elit vel molestie eleifend, tellus augue varius nunc, ut viverra augue nunc sit amet lorem.
        Mauris id massa interdum tellus dictum mattis. Etiam eget dui sapien. Maecenas sollicitudin ligula justo, id
        elementum ligula hendrerit a. Cras at porta arcu. Mauris sagittis ut odio eget posuere. Proin orci purus, mattis
        et eros id, gravida condimentum leo. Maecenas consectetur accumsan turpis, at posuere leo gravida eu. Donec
        interdum tempus enim vitae ultricies. Nullam eu faucibus lorem. Vestibulum ante ipsum primis in faucibus orci
        luctus et ultrices posuere cubilia curae; Donec eu odio tristique, sollicitudin dui at, pellentesque urna. Cras
        eget interdum turpis. Proin blandit neque turpis, ut congue orci dapibus at. Integer consectetur justo nec
        mauris vehicula placerat eu sed felis.
      </p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a gravida mi, in posuere lacus. Vestibulum
        auctor elit volutpat augue vehicula facilisis. Orci varius natoque penatibus et magnis dis parturient montes,
        nascetur ridiculus mus. Nam fringilla sem magna, a facilisis est egestas in. Aenean sed nibh eget lacus sagittis
        accumsan. Quisque blandit, neque eu commodo luctus, quam odio malesuada augue, vel tempus diam leo eget nibh.
        Maecenas sollicitudin placerat molestie. Ut viverra maximus nibh ut consectetur. Vivamus sed elit et elit
        sagittis mattis.

        Curabitur consequat tellus sit amet diam pharetra, sed blandit justo consectetur. Nam id lacinia diam, ut
        iaculis lectus. Pellentesque sed nisl non libero sagittis ultricies. Nam luctus sodales aliquet. Duis hendrerit
        justo dignissim blandit suscipit. Nulla lorem lorem, euismod quis diam nec, egestas ullamcorper ipsum. Lorem
        ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Phasellus pulvinar vitae ex eget dictum.
        Donec consectetur quam sapien, nec facilisis libero elementum eu. Nunc efficitur justo vel est hendrerit
        sollicitudin. Integer nisl felis, bibendum sed turpis quis, ultrices malesuada felis. Orci varius natoque
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla quis dolor non velit ornare elementum
        sit amet quis magna. Suspendisse semper turpis posuere nisi ultrices convallis. Suspendisse pharetra efficitur
        rhoncus.

        Aliquam interdum, elit vel molestie eleifend, tellus augue varius nunc, ut viverra augue nunc sit amet lorem.
        Mauris id massa interdum tellus dictum mattis. Etiam eget dui sapien. Maecenas sollicitudin ligula justo, id
        elementum ligula hendrerit a. Cras at porta arcu. Mauris sagittis ut odio eget posuere. Proin orci purus, mattis
        et eros id, gravida condimentum leo. Maecenas consectetur accumsan turpis, at posuere leo gravida eu. Donec
        interdum tempus enim vitae ultricies. Nullam eu faucibus lorem. Vestibulum ante ipsum primis in faucibus orci
        luctus et ultrices posuere cubilia curae; Donec eu odio tristique, sollicitudin dui at, pellentesque urna. Cras
        eget interdum turpis. Proin blandit neque turpis, ut congue orci dapibus at. Integer consectetur justo nec
        mauris vehicula placerat eu sed felis.
      </p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a gravida mi, in posuere lacus. Vestibulum
        auctor elit volutpat augue vehicula facilisis. Orci varius natoque penatibus et magnis dis parturient montes,
        nascetur ridiculus mus. Nam fringilla sem magna, a facilisis est egestas in. Aenean sed nibh eget lacus sagittis
        accumsan. Quisque blandit, neque eu commodo luctus, quam odio malesuada augue, vel tempus diam leo eget nibh.
        Maecenas sollicitudin placerat molestie. Ut viverra maximus nibh ut consectetur. Vivamus sed elit et elit
        sagittis mattis.

        Curabitur consequat tellus sit amet diam pharetra, sed blandit justo consectetur. Nam id lacinia diam, ut
        iaculis lectus. Pellentesque sed nisl non libero sagittis ultricies. Nam luctus sodales aliquet. Duis hendrerit
        justo dignissim blandit suscipit. Nulla lorem lorem, euismod quis diam nec, egestas ullamcorper ipsum. Lorem
        ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Phasellus pulvinar vitae ex eget dictum.
        Donec consectetur quam sapien, nec facilisis libero elementum eu. Nunc efficitur justo vel est hendrerit
        sollicitudin. Integer nisl felis, bibendum sed turpis quis, ultrices malesuada felis. Orci varius natoque
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla quis dolor non velit ornare elementum
        sit amet quis magna. Suspendisse semper turpis posuere nisi ultrices convallis. Suspendisse pharetra efficitur
        rhoncus.

        Aliquam interdum, elit vel molestie eleifend, tellus augue varius nunc, ut viverra augue nunc sit amet lorem.
        Mauris id massa interdum tellus dictum mattis. Etiam eget dui sapien. Maecenas sollicitudin ligula justo, id
        elementum ligula hendrerit a. Cras at porta arcu. Mauris sagittis ut odio eget posuere. Proin orci purus, mattis
        et eros id, gravida condimentum leo. Maecenas consectetur accumsan turpis, at posuere leo gravida eu. Donec
        interdum tempus enim vitae ultricies. Nullam eu faucibus lorem. Vestibulum ante ipsum primis in faucibus orci
        luctus et ultrices posuere cubilia curae; Donec eu odio tristique, sollicitudin dui at, pellentesque urna. Cras
        eget interdum turpis. Proin blandit neque turpis, ut congue orci dapibus at. Integer consectetur justo nec
        mauris vehicula placerat eu sed felis.
      </p>
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

<!-- Para implementar JQuery -->
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous">
</script>


</body>


</html>
