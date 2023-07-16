function subirCantidad(id_pedido) {
  var formData = {
    id_pedido: id_pedido,
  };
  $.ajax({
    url: '../api/subirCarrito.php',
    type: 'POST',
    data: formData,
    success: function(response) {
      var spanCantidad = document.getElementById('cantidad-' + id_pedido);
      var cantidad = parseInt(spanCantidad.innerText);
      cantidad += 1;
      spanCantidad.innerText = cantidad;
    },
    error: function() {
        console.log('Error al enviar el formulario');
    }
});
}
function bajarCantidad(id_pedido) {
  var formData = {
    id_pedido: id_pedido,
  };
  $.ajax({
    url: '../api/subirCarrito.php',
    type: 'POST',
    data: formData,
    success: function(response) {
      var spanCantidad = document.getElementById('cantidad-' + id_pedido);
      var cantidad = parseInt(spanCantidad.innerText);
      cantidad += 1;
      spanCantidad.innerText = cantidad;
    },
    error: function() {
        console.log('Error al enviar el formulario');
    }
});
}
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
