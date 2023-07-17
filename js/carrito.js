function subirCantidad(id_pedido) {
  var formData = {
    id_pedido: id_pedido,
  };
  $.ajax({
    url: "../api/subirCarrito.php",
    type: "POST",
    data: formData,
    success: function (response) {
      var spanCantidad = document.getElementById("cantidad-" + id_pedido);
      var cantidad = parseInt(spanCantidad.innerText);
      cantidad += 1;
      spanCantidad.innerText = cantidad;
      actualizarSubtotal(id_pedido);
      sumarTotalColumna();
    },
    error: function () {
      console.log("Error al enviar el formulario");
    },
  });
  

}
function bajarCantidad(id_pedido) {
  var formData = {
    id_pedido: id_pedido,
  };
  $.ajax({
    url: "../api/bajarCarrito.php",
    type: "POST",
    data: formData,
    success: function (response) {
      var spanCantidad = document.getElementById("cantidad-" + id_pedido);
      var cantidad = parseInt(spanCantidad.innerText);
      if (cantidad == 1) {
        var fila = document.getElementById("fila-"+ id_pedido);

        // Verificar si se encontró la fila
        if (fila) {
          // Eliminar la fila
          fila.parentNode.removeChild(fila);
        }
        sumarTotalColumna();
      } else {
        cantidad -= 1;
        spanCantidad.innerText = cantidad;
        actualizarSubtotal(id_pedido);
        sumarTotalColumna();
      }
    },
    error: function () {
      console.log("Error al enviar el formulario");
    },
    
  });
  

}


function eliminarFila(id_pedido) {
  var formData = {
    id_pedido: id_pedido,
  };
  $.ajax({
    url: "../api/EliminarCarrito.php",
    type: "POST",
    data: formData,
    success: function (response) {
      console.log("fila-"+ id_pedido);
      var fila = document.getElementById("fila-"+ id_pedido);
      console.log(fila);
      fila.parentNode.removeChild(fila);
      sumarTotalColumna();
    },
    error: function () {
      console.log("Error al enviar el formulario");
    },
  });
  
sumarTotalColumna();
}

function actualizarSubtotal(id_pedido) {
  var cantidad = document.getElementById("cantidad-" + id_pedido);
  var precio = document.getElementById("precio-" + id_pedido);
  console.log(cantidad,precio)
  var Ncantidad = parseInt(cantidad.innerText);
  var Nprecio = parseInt(precio.innerText.substring(3)); // Extraer el número sin "S/."
  console.log("Precio" +Nprecio)
  console.log("Cantodad" +Ncantidad)
  subtotal = Nprecio * Ncantidad;
  var total = document.getElementById("total-" + id_pedido);
  total.innerText = "S/."+subtotal;
}

function sumarTotalColumna() {
  var subtotalElements = document.getElementsByClassName("subtotal");
  var total = 0;
  
  for (var i = 0; i < subtotalElements.length; i++) {
    var subtotal = parseInt(subtotalElements[i].innerText.substring(3));
    total += subtotal;
  }
  
  var totalColumnaElement = document.getElementById("totalTotal");
  totalColumnaElement.innerText = total;
}

sumarTotalColumna();

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
