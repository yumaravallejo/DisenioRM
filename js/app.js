function ponerHola(){
  var hola = document.getElementById("busqueda");
  hola.value="No gastes dinero >:)";
  console.log("patata");
}

function comprobar(){
  var nomuser = document.getElementById("nomuser");
  var correoTlfn = document.getElementById("correoTlfn");
  var contra = document.getElementById("contra");
  var mensaje = document.getElementById("fallo");
  if (nomuser.value === "" || correoTlfn.value === "" || contra.value === "") {
    mensaje.style.display="block";
  }

}

function comprobarUs() {
  var nomuser = document.getElementById("nomuser");
  var correoTlfn = document.getElementById("correoTlfn");
  var contra = document.getElementById("contra");
  var mensaje = document.getElementById("editado");
  if (nomuser.value !== "@nomuser" || correoTlfn.value !== "@correo-tfno" || contra.value !== "password") {
    mensaje.style.display = "block";
  }
}

function mostrarMenu() {
  const offScreenMenu = document.querySelector('.offScreenMenu');
    if (offScreenMenu.style.display === "none") {
      offScreenMenu.style.display = "block";
    } else {
      offScreenMenu.style.display = "none";
    }
}

function mostrarContraseña() {
  const contrasenia = document.getElementById("contrasenia");
  contrasenia.type = 'text';
}

function ver_password() {
  var passwd_valor = document.elformulario.input_pass.value;

  document.getElementById('passwd_sitio').innerHTML
    = (document.elformulario.input_ver.checked)
    ? '<input type="text"     name="input_pass" value="">'
    : '<input type="password" name="input_pass" value="">'
  ;

  document.getElementById('passwd_sitio').innerHTML
    = (document.elformulario.input_ver.checked)
    ? '<input type="text"     name="input_pass" value="">'
    : '<input type="password" name="input_pass" value="">'
  ;

  document.elformulario.input_pass.value = passwd_valor;
}

function mostrarContrasenia(inputId, eyeId) {
  var passwordInput = document.getElementById(inputId);
  var eyeIcon = document.getElementById(eyeId);
  var state = eyeIcon.getAttribute("data-state") === "true";

  if (state) {
      passwordInput.setAttribute("type", "password");
      eyeIcon.className = "fa fa-eye fa-2x pointer";
      eyeIcon.setAttribute("data-state", "false");
  } else {
      passwordInput.setAttribute("type", "text");
      eyeIcon.className = "fa fa-eye-slash fa-2x pointer";
      eyeIcon.setAttribute("data-state", "true");
  }
}

function mostrarContrasenia(inputId, checkId) {
  var passwordInput = document.getElementById(inputId);
  var checkIcon = document.getElementById(checkId);
  var state = checkIcon.getAttribute("data-state-c") === "true";

  if (state) {
      passwordInput.setAttribute("type", "password");
      checkIcon.setAttribute("data-state-c", "false");
  } else {
      passwordInput.setAttribute("type", "text");
      checkIcon.setAttribute("data-state-c", "true");
  }
}

function cancelar() {
  window.location.href = 'index.php?pages=main';
}

//var globales(pueden llamarse desde cualquier parte)
//let locales
//const constantes

//onKeyUp --> editar, para cuando se cambie el texto

function mostrarMas() {
  const botonmas = document.getElementById('mmas');
  const botonmenos = document.getElementById('mmenos');
  const pagi1 = document.getElementById('pagi1');
  const pagi2 = document.getElementById('pagi2');
  
  if (window.getComputedStyle(pagi2).display === "none" && window.getComputedStyle(botonmenos).display === "none") {
    pagi2.style.display = "block";
    pagi1.style.display = "none";
    botonmas.style.display = "none";
    botonmenos.style.display = "block";
  }
}

function mostrarMenos() {
  const botonmas = document.getElementById('mmas');
  const botonmenos = document.getElementById('mmenos');
  const pagi1 = document.getElementById('pagi1');
  const pagi2 = document.getElementById('pagi2');
  
  if (window.getComputedStyle(pagi1).display === "none" && window.getComputedStyle(botonmas).display === "none") {
    pagi1.style.display = "block";
    pagi2.style.display = "none";
    botonmenos.style.display = "none";
    botonmas.style.display = "block";
  }
}

