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
</head>
<?php
// Obtener el valor del parámetro "correo_usuario" de la URL

$correoUsuario = $_GET['correo_usuario'];
include __DIR__ . '/conexion.php';

?>

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
  <h1>Total a pagar <span id="totalTotal"></span></h1>


  <div id="overlay" class="overlay"></div>

  <input type="button" value="✔ ACEPTAR" class="pagar" onclick="pagar()" />


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
          <div class="datos">
            <label for="card-issuer">Emisor de la Tarjeta:</label>
            <select id="card-issuer" name="card-issuer" required>
              <option value="" disabled selected>Seleccione un emisor</option>
              <option value="Visa">Visa</option>
              <option value="Mastercard">Mastercard</option>
              <option value="American Express">American Express</option>
            </select>
          </div>
        </div>

        <div>
          <div class="cvv">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
          </div>

          <div class="total">
            <label for="tatal">TOTAl:</label>
            <h1>Total a pagar <span id="totalTotal"></span></h1>
          </div>

          <div class="carrito_registro-botones">
            <input type="submit" value="$ PAGAR" id="enviar" />
            <input type="reset" value="CANCELAR" id="cancelar" onclick="cerrar()" />
          </div>
        </div>

    </form>
  </div>

  <script src="../js/carrito.js"></script>
  <script src="../js/pago.js"></script>
</body>

</html>