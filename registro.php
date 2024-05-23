<?php
session_start();
//Incluímos que se conecte a la base da datos
include("conexion_db.php");

/*Aquí hay que poner el nombre de los name
    - strlen: cantidad de caracteres
    - isset: pulsar (si se pulsa)
    - trim: quita espacios
*/

if (isset($_POST['continuar']))
  if (strlen($_POST['nomuser']) >= 1 && strlen($_POST['correoTlfn']) >= 1 && strlen($_POST['input_pass']) >= 1 ) {
      //Guardamos la información del usuario en variables
      $name =trim($_POST['nomuser']);
      $email = trim($_POST['correoTlfn']);
      $password = trim($_POST["input_pass"]);
      
      //Creamos la consulta INSERT de mysql
      $consulta = "INSERT INTO usuarios (nomusuario, emailusuario, contrausuario) 
                  VALUES ('$name', '$email', '$password')";

      $resultado = mysqli_query($conex, $consulta);

      //Comprobamos que todo haya salido bien
      if ($resultado) {
        $_SESSION['inicio'] = true;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        ?>
            <div class="mensaje2">
                <div class="frases">
                    <p class="imagen"><img src="img/bandera.gif" alt="Bandera Real Madrid"></p>
                    <h3 id="welcome" class="ok2">¡Bienvenido madridista!</h3>
                    </div>
                    <div class="spinner"></div>
            </div>
        <?php
        //Iniciamos la sesión
        
        } else {
            ?>
                <h3 class="bad2">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    } else {  //Si no hay nombre, correo, etc...
    ?>
        <h3 class="bad2">Por favor complete los campos</h3>
    <?php
}

/*

.ok {
  text-align: center;
  color: #5D6C55;
  position: absolute;
  top: 26%;
  width: 100%;
}

.bad {
  position: absolute;
  top: 26%;
  text-align: center;
  color: #8b4343;
  width: 100%;
  margin: 0 0;
}

*/
?>
<script>
if(document.getElementsByClassName("ok2")[0] && document.getElementsByClassName("ok2")[0].textContent == "¡Bienvenido madridista!"){
      setTimeout(function() { //Esto hará que se dispare la función los 3000 ms después  de que aparezca el bienvenido
      window.location.href = 'index.php?pages=main';
      }, 3000);
  }
</script>

<!doctype html>
<html class="no-js" lang="es" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Real Madrid CF</title>
    <link href="css/style.css" rel="stylesheet">
    <meta content="" name="description">

    <meta content="" property="og:title">
    <meta content="" property="og:type">
    <meta content="" property="og:url">
    <meta content="" property="og:image">
    <meta content="" property="og:image:alt">

    <link href="/favicon.ico" rel="icon" sizes="any">
    <link href="/icon.svg" rel="icon" type="image/svg+xml">
    <link href="icon.png" rel="apple-touch-icon">

    <link href="site.webmanifest" rel="manifest">
    <meta content="#fafafa" name="theme-color">
    <link rel="stylesheet" href="img/iconos/css/font-awesome.min.css">
</head>

<body>

    <div id="contenedor">

        <header>
            <div class="header-cont">
                <div class="cabecera">
                    <div id="logo-madrid"><img src="img/escudo.png"></div>
                    <div class="en-blanco"></div>
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
                            <li class="nav-item"><a class="nav-link" href="index.php" title="Ir al índice">INICIO</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="competicion.php"
                                    title="Ver competiciones y clasificación">COMPETICIONES</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="tienda.php" title="Tienda Oficial">TIENDA</a>
                            </li>
                        </ol>
                    </nav>

                    <!-- Menú pequeño (Hamburguesa) -->
                    <nav class="offScreenMenu" id="burger">
                        <ol class="lista-off">
                            <li class="item-off"><a class="link-off" href="index.php" title="Ir al índice">INICIO</a>
                            </li>
                            <li class="item-off"><a class="link-off" href="competicion.php"
                                    title="Ver competiciones y clasificación">COMPETICIONES</a>
                            </li>
                            <li class="item-off, last"><a class="link-off" href="tienda.php"
                                    title="Tienda Oficial">TIENDA</a></li>
                        </ol>
                    </nav>

                    <!-- Barra de búsqueda -->
                    <div id="busq-user-car">
                        <ol>
                            <li>
                                <form>
                                    <input alt="buscar" id="busqueda" name="busqueda" placeholder="Buscar..."
                                        title="Buscar Productos/Apartado" type="text">
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


        <div id="contenido-r" class="moverArriba">
            <h2>CREAR CUENTA</h2>
            <form action="registro.php" class="formcrear" method="post" name="elformulario">
                <input alt="Introduce un nombre de usuario" name="nomuser" placeholder="Nombre de usuario" required
                    title="Introduce un nombre de usuario" type="text" value=""><br>

                <input alt="Introduce un correo o teléfono" name="correoTlfn" placeholder="Correo electrónico" required
                    title="Introduce un correo o teléfono" type="email" value=""><br>

                <div class="contrase">
                    <i id="ojillo" class="fa fa-eye fa-2x" onclick="mostrarContrasenia('input_pass', 'ojillo')"></i>
                    <input id="input_pass" alt="Introduce una contraseña" name="input_pass" placeholder="Contraseña"
                        required title="Introduce una contraseña" type="password" value="" maxlength="15" minlength="6">
                </div>

                <div class="contrase">
                    <i id="ojo2" class="fa fa-eye fa-2x pointer abajo"
                        onclick="mostrarContrasenia('input_pass2', 'ojo2')"></i>
                    <input id="input_pass2" alt="Confirmar contraseña" name="input_pass"
                        placeholder="Confirmar contraseña" required title="Confirmar contraseña" type="password"
                        value="" maxlength="15" minlength="6">
                </div>
                <input class="boton-cont pointer" name="continuar" type="submit" value="continuar">
            </form>

            <div class="socio">
                <span>¿Ya eres socio? </span>
                <a class="enlace" href="login.php">Unirse</a>
            </div>

        </div>

        <?php
            include("footer.php");
        ?>
    </div>


    <script>

    </script>

    <script src="js/app.js"></script>
</body>


</html>