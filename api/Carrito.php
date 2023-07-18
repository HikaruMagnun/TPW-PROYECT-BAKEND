<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/carrito.css" />
  <link rel="stylesheet" href="../css/pago.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Carrito</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://www.paypal.com/sdk/js?client-id=ATI8v_bq4V3a36l-vf_-ZgsZxmhzVFKZw01Ayxah-KXXHvsx-JrGEmmeRBAhehV1xDzX6rDc-Ve46OIc&currency=USD"></script>

</head>

<?php
// Obtener el valor del parámetro "correo_usuario" de la URL

$correoUsuario = $_GET['correo_usuario'];
include __DIR__ . '/conexion.php';
echo $correoUsuario;
?>
<script>
  var formData = {
    correo: "<?php echo $correoUsuario; ?>"
  };
</script>


<body class="carrito_body">

  <header class="carrito_header">
    <h1 class="carrito_header-h1">
      <img class="carrito-img" src="https://lh3.googleusercontent.com/u/0/d/1qkhL9jTUCeZ4OBfofvYvNEw9xxSX5Pj7=w1366-h653-iv1" />&#160;CARRITO&#160;<img class="carrito-img" src="https://lh3.googleusercontent.com/u/0/d/1qkhL9jTUCeZ4OBfofvYvNEw9xxSX5Pj7=w1366-h653-iv1" />
    </h1>

    <hr class="carrito_body-hr" />

    <p class="carrito_body-p">
      Aqui encontraras la lista de tus celulares agregados al carrito. Si deseas
      conocer nuestra ubicación, visita la sección "Contáctanos". Agradecemos
      que nos hayas elegido y te deseamos un excelente día. ¡Gracias :3! 😉😊😊😊
    </p>
  </header>
  <br><br>
  <table>
    <thead>
      <tr>
        <th>Nombre del Celular</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Total</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php include __DIR__ . '/Tabla_Carrito.php' ?>

    </tbody>
  </table>
  <h5>Total a pagar: <span id="totalTotal"></span></h5>

  <br><br>
  <div id="paypal-button-conteiner"></div>


  <div id="overlay" class="overlay"></div>

  <!-- <input type="button" value="✔ ACEPTAR" class="pagar" onclick="pagar()" /> -->

  <script>
    // Obtener el elemento
    var element = document.getElementById("totalTotal");

    // Obtener el contenido del elemento y convertirlo a un número entero
    var content = parseInt(element.innerHTML);
    console.log(content);


    function cargarContenido(archivo) {
      var iframe = window.frameElement;
      iframe.src = archivo;
    }
    paypal.Buttons({
      style: {
        label: 'pay'
      },
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: 500
            }
          }]
        });
      },
      onApprove: function(data, actions) {

        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Gracias por su compra, Nos pondremos en contacto usted',
          showConfirmButton: false,
          timer: 3000
        })

        $.ajax({
          url: "../api/Tabla_switch.php",
          type: "POST",
          data: formData,
          success: function(response) {
            console.log("sucess");

          },
          error: function() {
            console.log("Error al enviar el formulario ");
          },
        })
        setTimeout(function() {
          cargarContenido('../api/Carrito.php?correo_usuario=<?php echo $correoUsuario ?>')
        }, 4000);

        
      },

      onCancel: function(data) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Pago Cancelado!',

        })
      }


    }).render('#paypal-button-conteiner');
  </script>
  <script src="../js/carrito.js"></script>
  <!--
  <div id="medioPago">
    <h3 class="medioPago-h3">FORMULARIO DE PAGO</h3>

    <div class="tarjeta">
      <img src="../img/tarjetas.png" class="tarjeta-img">
    </div>

    <form onsubmit="return validateForm()" required>

      <div class="rellenar">
        <div>
          <div class="datos">
            <label for="card-number">Número de Tarjeta:</label>
            <input type="text" id="card-number" name="card-number" required>
          </div>
          <div class="datos">
            <label for="expiration-date">Fecha de Caducidad:</label>
            <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/AA" required>
          </div>
          <div class="datos">
            <label for="card-holder">Titular de la Tarjeta:</label>
            <input type="text" id="card-holder" name="card-holder" required>
          </div>
        </div>

        <div>
          <div class="cvv">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
          </div>

          <div class="datos">
            <label for="card-issuer">Emisor de la Tarjeta:</label>
            <select id="card-issuer" name="card-issuer" required>
              <option value="" disabled selected>Seleccione un emisor</option>
              <option value="Visa">Visa</option>
              <option value="Mastercard">Mastercard</option>
              <option value="American Express">American Express</option>
            </select>
          </div>

          <div class="datos">
            <label for="card-issuer">Total:</label>
            <span>$ 500</span>
            </select>
          </div>
        </div>
      </div>

      <div class="pagar-botones">
        <input type="submit" value="$ PAGAR" id="enviar" />
        <input type="button" value="CANCELAR" id="cancelar" onclick="cerrar()" />
      </div>

    </form>
  </div>

  <div id="paypal-button.conteiner"></div>

  <script>
    paypal.Buttons({
      // Order is created on the server and the order id is returned
      createOrder() {
        return fetch("/my-server/create-paypal-order", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            // use the "body" param to optionally pass additional order information
            // like product skus and quantities
            body: JSON.stringify({
              cart: [{
                sku: "YOUR_PRODUCT_STOCK_KEEPING_UNIT",
                quantity: "YOUR_PRODUCT_QUANTITY",
              }, ],
            }),
          })
          .then((response) => response.json())
          .then((order) => order.id);
      },
      // Finalize the transaction on the server after payer approval
      onApprove(data) {
        return fetch("/my-server/capture-paypal-order", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              orderID: data.orderID
            })
          })
          .then((response) => response.json())
          .then((orderData) => {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  window.location.href = 'thank_you.html';
          });
      }
    }).render('#paypal-button-container');
  </script>
  <script src="../js/pago.js"></script>
  -->





</body>

</html>