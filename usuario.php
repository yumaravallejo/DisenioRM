<?php
  session_start();
  include("conexion_db.php");
  //var_dump($_SESSION); --> te muestra lo que guarda la sesión (Cuenta como html --> da conflicto con el header location)
  //(Todo lo que cuenta como impresion, ))
if (!$conex) {
  echo "No ha podido establacerse la conexión";
} else {
  if (isset($_SESSION['inicio']) && $_SESSION['inicio']) {
    $nombre = $_SESSION['name'];
    $contra = $_SESSION['password'];
    $consulta1 = "SELECT emailusuario FROM usuarios WHERE nomusuario = '$nombre' AND contrausuario = '$contra'";

    // Ejecutar la consulta
    $resultado1 = mysqli_query($conex, $consulta1);

    if ($fila = mysqli_fetch_assoc($resultado1)) {
      // Obtener el email del usuario
      $email = $fila['emailusuario'];
      
      $consulta2 = "SELECT idusuario FROM usuarios WHERE nomusuario = '$nombre' AND contrausuario = '$contra'";

      $id = mysqli_query($conex, $consulta2);

      if ($id) {
        if (isset($_POST["cambio"])) {
        $name =trim($_POST['perfuser']);
        $email2=trim($_POST['perfcorreo']);
        $contrasenia=trim($_POST['perfcontra']);

        $consulta2 = "UPDATE usuarios 
                      SET nomusuario = '$nombre', emailusuario = '$email2', contrausuario = '$contrasenia' 
                      WHERE idusuario = '$id';";
      } else {
        echo "No se ha pulsado nada";
      }
    } else {
      echo "No se ha podido encontrar la id";
    }
    } else {
      // Si no se encontraron resultados, mostrar un mensaje de error o redirigir al usuario
      echo "No se encontraron usuarios con el nombre y contraseña proporcionados.";
    }
  } else {
    header("Location: index.php");
    exit;
  }
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

    <?php
      include("header.php");
    ?>


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
                <input id="nomusuario" class="input" type="text" name="perfuser"
                    title="Introduce un nuevo nombre si quieres cambiarlo" value="<?php echo $nombre;?>"
                    placeholder="nombre de usuario" alt="Editar el nombre de usuario o verlo" required>
                
                <input id="correoTlfn" class="input" type="text" name="perfcorreo"
                title="Introduce un nuevo correo o teléfono si quieres cambiarlo" value="<?php echo $email; ?>"
                placeholder="correo electrónico o contraseña" alt="Editar el correo o teléfono o verlo" required>
                
                <input id="contra" class="in-final" type="password" name="perfcontra"
                title="Introduce una nueva contraseña si quieres cambiarla" value="<?php echo $contra; ?>"
                placeholder="contraseña" alt="Editar la contraseña o verla" required>
            
                <span class="mostrar">
                    <input class="data-state-c" type="checkbox" name="input_ver" value="ver" id="mostrar" onclick="mostrarContrasenia('contra', 'mostrar')">
                    <label for="mostrar">Mostrar Contraseña</label>
                </span>
                    <input type="submit" value="Aceptar cambios" title="Editar campos de usuario"
                    name="cambio" alt="Botón de aplicación de cambios" id="cambio" class="in-final pointer aceptarCambios">
            </form>
            <div class="eliminar">
                <a href="cerrar.php" id="pedro">Cerrar Sesión</a>
                <a href="eliminar.php" id="paco">Eliminar cuenta</a>
            </div>

            <div class="eliminar-off">
                <a href="cerrar.php" id="pedro" title="Cerrar Sesión"><img src="img/cerrar.png"></a>
                <a href="eliminar.php" id="paco" title="Eliminar Cuenta"><img src="img/basura.png"></a>
            </div>
        </div>
        <div id="Hala-madrid">
            <img src="img/hala-madrid.png" alt="Foto de Hala madrid" title="!Hala Madrid!">
        </div>
    </div>


    <?php
      include("footer-r.php");
    ?>
        </div>


</body>


</html>