window.addEventListener("DOMContentLoaded", function () {
  var tabs = document.querySelectorAll(".menu_pestaña_elememt");

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      var url = this.getAttribute("data-url");
      var iframe = document.querySelector("iframe[name='main']");
      iframe.src = url;
    });
  });
});
window.addEventListener("load", function () {
  var iframe = document.querySelector("iframe[name='main']");
  iframe.src = "../Inicio.html";
});

const elementos = document.querySelectorAll(".menu_pestaña_elememt");

elementos.forEach((elemento) => {
  elemento.addEventListener("mouseover", cambiarColor);
  elemento.addEventListener("mouseout", restaurarColor);
});
function cambiarColor() {
  this.style.backgroundColor = "#192944";
}

function restaurarColor() {
  this.style.backgroundColor = "#111927";
}

/*function iniciar() {
  cargarContenido("Inicio.html");
}



function cargarContenido(archivo) {
  fetch(archivo)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("contenido").innerHTML = data;
    })
    .catch((error) => console.log(error));
}*/
