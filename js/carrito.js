document.addEventListener("DOMContentLoaded", function () {
  const checkboxes = document.getElementsByName("celular");
  const carritoDivs = document.querySelectorAll("[name='carrito_div']");

  checkboxes.forEach(function (checkbox, index) {
    checkbox.addEventListener("change", function () {
      if (this.checked) {
        carritoDivs[index].style.backgroundColor = "#5f5f5f";
        carritoDivs[index].style.boxShadow =
          "5px 5px 7px #88ca04, -5px -5px 7px #88ca04, 5px -5px 7px #88ca04, -5px 5px 7px #88ca04";
        carritoDivs[index].style.animation = "none";
        carritoDivs[index].style.borderColor = "#88ca04";
        carritoDivs[index].querySelector("img").style.opacity = "0.5";
      } else {
        carritoDivs[index].style.backgroundColor = "";
        carritoDivs[index].style.boxShadow = "";
        carritoDivs[index].style.animation = "";
        carritoDivs[index].querySelector("img").style.opacity = "1";
      }
    });
  });
});

function resetear() {
  var carritoDivs = document.querySelectorAll('[name="carrito_div"]');
  carritoDivs.forEach(function (carritoDiv) {
    carritoDiv.querySelector("img").style.opacity = "1";
    carritoDiv.style.boxShadow = "";
    carritoDiv.style.backgroundColor = "";
  });

  var popup = document.getElementById("carrito_registro");
  popup.style.display = "none";

  var overlay = document.getElementById("overlay2");
  overlay.style.display = "none";
}

function cerrarEmergente() {
  var overlay = document.getElementById("overlay1");
  overlay.style.display = "none";

  var popup = document.getElementById("carrito_mensaje");
  popup.style.display = "none";
}
