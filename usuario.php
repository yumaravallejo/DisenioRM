<?php
session_start();
include("conexion_db.php");

if (!$conex) {
    echo "No ha podido establecerse la conexión";
} else {
    if (isset($_SESSION['inicio']) && $_SESSION['inicio']) {
        $nombre = $_SESSION['name'];
        $contra = $_SESSION['password'];

        $consulta1 = "SELECT emailusuario, idusuario FROM usuarios WHERE nomusuario = ? AND contrausuario = ?";
        $stmt = $conex->prepare($consulta1);
        $stmt->bind_param("ss", $nombre, $contra);
        $stmt->execute();
        $resultado1 = $stmt->get_result();

        if ($fila = $resultado1->fetch_assoc()) {
            $email = $fila['emailusuario'];
            $id = $fila['idusuario'];

            if (isset($_POST["cambio"])) {
                $name = trim($_POST['perfuser']);
                $email2 = trim($_POST['perfcorreo']);
                $contrasenia = trim($_POST['perfcontra']);

                $consulta2 = "UPDATE usuarios SET nomusuario = ?, emailusuario = ?, contrasenia = ? WHERE idusuario = ?";
                $stmt2 = $conex->prepare($consulta2);
                $stmt2->bind_param("sssi", $name, $email2, $contrasenia, $id);
                $resultado2 = $stmt2->execute();

                if ($resultado2) {
                    // Actualiza las variables de sesión con los nuevos datos
                    $_SESSION['name'] = $name;
                    $_SESSION['password'] = $contrasenia;
                    $_SESSION['email'] = $email2;

                    ?>
                        <div class="mensaje3">
                                <h3 id="welcome" class="ok2">Espera unos segundos...</h3>
                        </div>
                        <script>
                            setTimeout(function() {
                                window.location.href = 'usuario.php';
                            }, 3000); // 3000 milliseconds = 3 seconds
                        </script>
                    <?php
                } else {
                    echo "Error al actualizar los datos";
                }
            }
        } else {
            echo "No se encontraron usuarios con el nombre y contraseña proporcionados.";
        }
    } else {
        header("Location: index.php");
        exit;
    }
}
?>
<script>
  //Esto cogerá el elemento 0 que tenga la clase ok (solo lo tiene esa) además de comprobar que el texto es ese para asegurar
  if(document.getElementsByClassName("ok2")[0] && document.getElementsByClassName("ok2")[0].textContent == "¡Bienvenido madridista!"){
      setTimeout(function() { //Esto hará que se dispare la función los 3000 ms después  de que aparezca el bienvenido
      window.location.href = 'usuario.php';
      
      }, 3000);
  }
</script>


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