<?php session_start(); 
include ("conexion_db.php");
function obtenerPartidos($conex) {
    $consulta = "SELECT fecha_partido, id_local, id_visitante, nom_competicion FROM partidos";
    $resultado = $conex->query($consulta);
    
    $partidos = array();
    if ($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            $partidos[] = $row;
        }
    }
    return $partidos;
}

function obtenerEquipo($id) {
  // Conexión a la base de datos (reemplaza 'host', 'usuario', 'contraseña' y 'basededatos' con tus propios valores)
  $conexion = new mysqli('host', 'usuario', 'contraseña', 'basededatos');

  // Verificar la conexión
  if ($conexion->connect_error) {
      die("Error de conexión: " . $conexion->connect_error);
  }

  // Preparar la consulta SQL para obtener la imagen_equipo según el ID proporcionado
  $consulta = $conexion->prepare("SELECT img_equipo FROM nombre_tabla WHERE id = ?");
  $consulta->bind_param("i", $id); // "i" indica que el parámetro es de tipo entero
  $consulta->execute();

  // Obtener el resultado de la consulta
  $resultado = $consulta->get_result();

  // Verificar si se encontró algún resultado
  if ($resultado->num_rows > 0) {
      // Obtener la fila de resultados como un arreglo asociativo
      $fila = $resultado->fetch_assoc();
      
      // Devolver el valor del campo img_equipo
      return $fila['img_equipo'];
  } else {
      // Si no se encontraron resultados, devolver un valor por defecto o un mensaje de error
      return "No se encontró ninguna imagen para el ID proporcionado";
  }

  // Cerrar la conexión y liberar recursos
  $consulta->close();
  $conexion->close();
}


?>
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
      if (isset($_SESSION['inicio'])) {
        include("header.php");
        $productos = obtenerProductos($conex);
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
            <?php
            ?>
            <div class="pedir-datos">
              <img src="img/belli.jpg">
              <p class="info-partido">

              </p>
            </div><?php 
                
            ?>
            
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
    } else {
      include("index.php");
    }
      
    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>

  <script src="js/app.js">
  </script>
</body>


</html>