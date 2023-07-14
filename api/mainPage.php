
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/076516437a.js"
      crossorigin="anonymous"
    ></script>
    <title>MOVILAND</title>
    <link rel="icon" href="https://lh3.googleusercontent.com/u/0/d/1BztHznYZ5NnudZ0HIE3dOwI6VvcMVy_r=w1366-h653-iv1"/>
    <link rel="stylesheet" href="css/css.css" />
  </head>
  <?php
// Obtener el valor de la cookie
$correoUsuario = $_COOKIE['correo_usuario'];
?>
  <body>
    <div class="page">
      <div class="menu">
        <div class="menu_logo">
          <img
            src="https://lh3.googleusercontent.com/u/0/d/1BztHznYZ5NnudZ0HIE3dOwI6VvcMVy_r=w1366-h653-iv1"
            alt=""
          />
        </div>
        <nav class="menu_pestaña">
          <ul>
            <li>
              <div
                class="menu_pestaña_elememt"
                id="menu_pestaña_elememt_inicio"
                data-url="Inicio.html"
              >
                &nbsp;
                <i class="fa-solid fa-house"></i>
                <h4>INICIO</h4>
              </div>
            </li>
            <li>
              <div
                class="menu_pestaña_elememt"
                id="menu_pestaña_elememt_categorias"
                data-url="api/Samsung.php"
              >
                &nbsp;
                <i class="fa-solid fa-bars"></i>
                <h4>CATEGORIAS</h4>
              </div>
            </li>
            <li>
              <div class="menu_pestaña_elememt" data-url="Carrito.html">
                &nbsp;
                <i class="fa-solid fa-cart-shopping"></i>
                <h4>CARRITO</h4>
              </div>
            </li>
            <li>
              <div class="menu_pestaña_elememt" data-url="Nosotros.html">
                &nbsp;
                <i class="fa-solid fa-users"></i>
                <h4>NOSOTROS</h4>
              </div>
            </li>
            <li>
              <div class="menu_pestaña_elememt" data-url="Contacto.html">
                &nbsp;
                <i class="fa-solid fa-phone-volume"></i>
                <h4>CONTACTANOS</h4>
              </div>
            </li>
            <li>

              <div class="menu_pestaña_elememt" data-url="api/Perfil.php?correo_usuario=<?php echo urlencode($_COOKIE['correo_usuario']); ?>">
                &nbsp;
                <i class="fa-solid fa-phone-volume"></i>
                <h4>
                  PERFIL
                </h4>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <div id="contenido">
        <iframe name="main" frameborder="0"></iframe>
      </div>
    </div>
    <script src="js/test.js"></script>
  </body>
</html>
