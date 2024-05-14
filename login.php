<?php 
  include("conexion_db.php");

  //Comprobamos que todos los campos estén rellenos y que se ha pulsado el botón
  if (isset($_POST['continuar'])) {
    if (strlen($_POST['nomuser']) >= 1 &&
        strlen($_POST['contrasen'])) {

        //Nos guardamos el contenido en variables
        $user = $_POST['nomuser'];
        $password = $_POST['contrasen'];

          //Comprobamos que es un usario
        $consulta1 = "SELECT nomusuario, contrausuario 
                      FROM usuarios 
                      WHERE nomusuario = '$user' AND contrausuario = '$password'";
        
        $resultado = mysqli_query($conex, $consulta1);
        $nr = mysqli_num_rows($resultado);

        if ($nr == 1) {
            ?>
                <div class="mensaje">
                <div class="frases">
                    <p class="imagen"><img src="img/bandera.gif" alt="Bandera Real Madrid"></p>
                    <h3 id="welcome" class="ok">¡Bienvenido madridista!</h3>
                    </div>
                    <div class="spinner"></div>
                </div>
            <?php
                //Iniciamos la sesión
                $_SESSION['inicio'] = true;
                //Guardamos las variables de los nombres y contraseña de inicio de sesión
                $_SESSION['name'] = $user;
                $_SESSION['password'] = $password;
                $consulta_email = "SELECT emailusuario 
                                    FROM usuarios 
                                    WHERE nomusuario = '$user' AND contrausuario = '$password'";
                $_SESSION['email'] = mysqli_query($conex, $consulta_email);
        } else {
            ?>
                <h3 class="badLog">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    } else {  
        ?>
            <h3 class="badLog">Por favor complete los campos</h3>
        <?php
    }
}

?>


<div id="contenido-r" class="moverArriba">
    <h2>INICIAR SESIÓN</h2>
    <form method="post" action="index.php" class="formcrear" name="elformulario" id="form-login">
        <input type="text" name="nomuser" placeholder="Nombre de usuario" title="Introduce un nombre de usuario"
            alt="Introduce un nombre de usuario" value="" required><br>
        <div class="contrase">
            <span><i id="ojito" class="fa fa-eye fa-2x" onclick="mostrarContrasenia('contrase', 'ojito')"></i></span>
            <input id="contrase" alt="Introduce una contraseña" name="contrasen" placeholder="Contraseña" required
            title="Introduce una contraseña" type="password" value="" maxlength="15" minlength="6">
        </div>

        <div id="preguntas">

            <div>
                <a class="enlace pointer">¿Has olvidado tu contraseña?</a>
            </div>
        </div>
        <input type="submit" name="continuar" value="continuar" class="boton-cont pointer" id="submin">
    </form>
    <div class="socio">
        <span>¿No eres socio? </span>
        <a class="enlace" href="registro.php">Crear cuenta</a>
    </div>
</div>