<?php 
session_start(); 
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

function obtenerEquipo($id, $conex) {
    // Preparar la consulta SQL para obtener la imagen_equipo según el ID proporcionado
    $consulta = $conex->prepare("SELECT nomequipo, img_equipo FROM equipos WHERE idequipos = ?");
    $consulta->bind_param("i", $id); // "i" indica que el parámetro es de tipo entero
    $consulta->execute();

    // Obtener el resultado de la consulta
    $resultado = $consulta->get_result();

    // Verificar si se encontró algún resultado
    if ($resultado->num_rows > 0) {
        // Obtener la fila de resultados como un arreglo asociativo
        $fila = $resultado->fetch_assoc();
        // Devolver la fila completa
        return $fila;
    } else {
        // Si no se encontraron resultados, devolver un valor por defecto o un mensaje de error
        return ["nomequipo" => "Equipo desconocido", "img_equipo" => "img/default.png"];
    }

    // Cerrar la consulta
    $consulta->close();
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
        include("header.php");
        $partidos = obtenerPartidos($conex);
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
            <div id="pagi1">
            <?php
            for ($i = 0; $i < 5 && $i < count($partidos); $i++) {
                $partido = $partidos[$i];
                $equipoLocal = obtenerEquipo($partido['id_local'], $conex);
                $equipoVisitante = obtenerEquipo($partido['id_visitante'], $conex);
            ?>
            <div class="pedir-datos">        
                  <!-- Imagen 1 -->
                  <img src="<?php echo $equipoLocal['img_equipo']; ?>" alt="<?php echo $equipoLocal['nomequipo'];?>" title="<?php echo $equipoLocal['nomequipo'];?>">
                <div class="info-medio">
                  VS <br>
                  <p class="fecha-partido"><?php echo $partido['fecha_partido']; ?></p>
                 </div>
                   <!-- Imagen 2 -->
                   <img src="<?php echo $equipoVisitante['img_equipo']; ?>" alt="<?php echo $equipoVisitante['nomequipo']; ?>" title="<?php echo $equipoVisitante['nomequipo'];?>"> 
            </div>

            <?php 
            }
            ?>
            <div id="mmas" class="pointer botoncin1" onclick="mostrarMas()">Mostrar más</div>
              
            </div>
            <div id="pagi2">
            <?php
            foreach ($partidos as $partido) {
                $equipoLocal = obtenerEquipo($partido['id_local'], $conex);
                $equipoVisitante = obtenerEquipo($partido['id_visitante'], $conex);
            ?>
            <div class="pedir-datos">        
                  <!-- Imagen 1 -->
                  <img src="<?php echo $equipoLocal['img_equipo']; ?>" alt="<?php echo $equipoLocal['nomequipo'];?>" title="<?php echo $equipoLocal['nomequipo'];?>">
                <div class="info-medio">
                  VS <br>
                  <p class="fecha-partido"><?php echo $partido['fecha_partido']; ?></p>
                 </div>
                   <!-- Imagen 2 -->
                   <img src="<?php echo $equipoVisitante['img_equipo']; ?>" alt="<?php echo $equipoVisitante['nomequipo']; ?>" title="<?php echo $equipoVisitante['nomequipo'];?>"> 
            </div>

            <?php 
            }
            ?>
            <div id="mmenos" class="pointer botoncin" onclick="mostrarMenos()">Mostrar menos</div>

            
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