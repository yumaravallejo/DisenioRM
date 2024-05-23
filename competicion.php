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

  <div id="contenedor">

    <?php
      include("header.php");
    ?>
    <div id="contenido-c">
      <div class="title">
        <h2>
          <img src="img/icons8-calendario-50.png">
          Próximos partidos
        </h2>
      </div>
      <div class="contenido-general">
        <div class="informacion-general">
          <div id="parte-izq">
            <div class="pedir-datos">
              <img src="img/belli.jpg">
              <p class="info-partido">
                <?php
                  
                ?>
              </p>
            </div>
            <div class="pedir-datos">
              <img src="img/belli.jpg">
              <p class="info-partido">Info Partido</p>
            </div>
            <div class="pedir-datos">
              <img src="img/belli.jpg">
              <p class="info-partido">Info Partido</p>
            </div>
            <div class="pedir-datos">
              <img src="img/belli.jpg">
              <p class="info-partido">Info Partido</p>
            </div>
          </div>
        </div>
        <div id="parte-abaj">
          <h2>
            <img src="img/icons8-calendario-50.png">
            Clasificación
          </h2>
          <img src="img/clasi.jpg">
        </div>
        <div id="parte-dcha">
          <img src="img/clasi.jpg">
        </div>
      </div>
    </div>



    <?php
      include("footer.php");
    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>

  <script src="js/app.js">
  </script>
</body>


</html>