<?php session_start(); 
include ("conexion_db.php");
function obtenerProductos($conex) {
    $consulta = "SELECT id, nom_producto,img_producto FROM productos";
    $resultado = $conex->query($consulta);
    
    $productos = array();
    if ($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            $productos[] = $row;
        }
    }
    return $productos;
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
            include ("header.php");
            $productos = obtenerProductos($conex);
    ?>
        <div id="contenido-t">
            <div id="tienda-real">
                <h2>TIENDA OFICIAL</h2>
                <h2>REAL MADRID</h2>
            </div>

            <div id="productos">
                <ol>
                <?php
                    foreach ($productos as $producto) {
                        ?> <li class="pointer prod">
                                <div>
                                    <p><img src="<?php echo $producto['img_producto'] ?>"></p>
                                    <p><?php echo $producto['nom_producto'] ?></p>
                                </div>
                            </li>
                        <?php
                    }
                ?>
                </ol>   
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