<?php
 session_start();
 include("conexion_db.php");
 //var_dump($_SESSION); --> te muestra lo que guarda la sesión
 if (isset($_SESSION['inicio']) && $_SESSION['inicio']) {
     if (isset($_POST['perfuser']) && isset($_POST['perfcorreo']) && isset($_POST['perfcontra']) &&
     strlen($_POST['perfuser']) >= 1 && strlen($_POST['perfcorreo']) >= 1 && strlen($_POST['perfcontra']) >= 1 ) {
       $nuevoNom = $_POST['perfuser'];
       $nuevoEmail = $_POST['perfcorreo'];
       $nuevaContra = $_POST['perfcontra'];
       $consulta2 = mysqli_query($conex, "SELECT idusuario FROM  WHERE");    
       $consulta = "  UPDATE usuarios 
                       SET nomusuario ='$nuevoNom', emailusuario ='$nuevoEmail', contrausuario ='$nuevaContra'
                       WHERE idusuario = $consulta2";
       $resultado = mysqli_query($conex, $consulta);
   
       if($resultado) {
           echo "Editado con éxito";
       } else {
        echo "No ha podido editarse";
       }
   } else {
    echo "No se ha encontrado lo que buscaba";
   }
   } else {
     // Si no se encontraron resultados, mostrar un mensaje de error o redirigir al usuario
     echo "No se encontraron usuarios con el nombre y contraseña proporcionados.";
   }



?>