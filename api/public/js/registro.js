function abrirRegistro() {
  let checkboxes = document.getElementsByName("celular");
  let contador = 0;
  let cero = "¡NINGUN CELULAR SELECCIONADO!";
  let max = "¡SE HA EXCEDIDO EL NÚMERO MÁXIMO DE CELULARES 😟!";

  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      contador++;
    }
  }

  if (contador == 0) {
    document.getElementById("carrito_mensaje-p").innerHTML = cero;
    var overlay = document.getElementById("overlay1");
    overlay.style.display = "block";

    var popup = document.getElementById("carrito_mensaje");
    popup.style.display = "block";
  } else {
    if (contador > 4) {
      document.getElementById("carrito_mensaje-p").innerHTML = max;
      var overlay = document.getElementById("overlay1");
      overlay.style.display = "block";

      var popup = document.getElementById("carrito_mensaje");
      popup.style.display = "block";
    } else {
      var overlay = document.getElementById("overlay2");
      overlay.style.display = "block";

      var popup = document.getElementById("carrito_registro");
      popup.style.display = "block";
    }
  }
}
