<?php
session_start();
  //Incluimos la conexión con la base de datos
  include("conexion_db.php");

  //Si pulso el botón "eliminar"
  if (isset($_POST['eliminar'])) {
      session_destroy();
      header("Location:index.php");
    } else {
      echo "Algo ha salido mal";
}

?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Real Madrid CF</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <div id="contenedor-u">

    <?php include("header.php");  ?>


    <div id="contenido-e">
      <div class="interno">
        <h2>¿Estás seguro de que quieres cerrar tu sesión?</h2>
        <div class="botones">
          <p><a href="index.php" class="boton-cancelar">Cancelar</a></p>
          <form action="cerrar.php" method="post">
          <input type="submit" value="Cerrar" name="eliminar" title="Si pulsas eres del barca" class="completar pointer">
        </form>
        </div>
      </div>
    </div>

    <?php include("footer-r.php"); ?>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>

  <script src="js/app.js">
  </script>
</body>


</html>