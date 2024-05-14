<?php
session_start();
?>
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
<?php
include("header.php");
if (isset($_SESSION['inicio'])) {
  if(isset($_GET["pages"])){
    include($_GET["pages"].".php");
  }else{
    include("login.php");
  }

} else {
  include("login.php");
}
include("footer.php");

?>
<!-- Para implementar JQuery -->

</div>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous">
</script>

<script>
  //Esto cogerá el elemento 0 que tenga la clase ok (solo lo tiene esa) además de comprobar que el texto es ese para asegurar
  if(document.getElementsByClassName("ok")[0] && document.getElementsByClassName("ok")[0].textContent == "¡Bienvenido madridista!"){
      setTimeout(function() { //Esto hará que se dispare la función los 3000 ms después  de que aparezca el bienvenido
      window.location.href = 'index.php?pages=main';
      }, 3000);
  }


  // El fetch te sirve para buscar, (postman como  ejemplo visual)
  // fetch('login.php', {
  //     method: 'POST',
  //     headers: {
  //         'Content-Type': 'application/x-www-form-urlencoded'
  //     },
  //     body: `username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`
  // })


</script>

</body>


</html>
