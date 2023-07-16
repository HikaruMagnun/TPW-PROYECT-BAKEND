<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../css/carrito.css" />
  <link rel="stylesheet" href="../css/registro.css" />
  <title>Carrito</title>
</head>
<?php
// Obtener el valor del parámetro "correo_usuario" de la URL

$correoUsuario = $_GET['correo_usuario'];


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



  <div class="carrito_opciones-input">
    <input type="button" value="✔ ACEPTAR" class="carrito_opciones-aceptar" onclick="abrirRegistro()" />
    <input type="reset" value="🔄 RESETEAR" class="carrito_opciones-resetear" onclick="resetear()" />
  </div>



</body>

</html>