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

function pagar() {
  $.ajax({
    url: "../api/paypalEnviar.php",
    type: "POST",
    data: {
      business: "sb-1sx47w26223345@business.example.com",
      cmd: "_xclick",
      item_name: "Lampara de escritorio",
      amount: "13.00",
      currency_code: "PEN",
      quantity: "2",
      lc: "es_ES",
      image_url: "https://picsum.photos/150/150",
      return: "http://tpw-proyect-bakend.vercel.app/api/receptor.php"
    },
    success: function (response) {
      // Maneja la respuesta del servidor
      var popup = window.open(response, "_blank", "width=600,height=400");

    // Verifica si la ventana emergente se bloqueó por el navegador
    if (popup == null || typeof popup === "undefined") {
      alert("La ventana emergente fue bloqueada por el navegador. Habilita las ventanas emergentes para continuar con el pago.");
    }
  },
  error: function () {
    console.log("Error al enviar la solicitud al servidor");
  },
});
  
 
 
  
  
}
