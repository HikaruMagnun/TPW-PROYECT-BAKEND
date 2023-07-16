<!DOCTYPE html>
<html lang="es">
<?php
// Obtener el valor del parámetro "correo_usuario" de la URL

  $correoUsuario = $_GET['correo_usuario'];
 

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/celulares.css">
    <title>MoViLand</title>
</head>
<body>
    <div class="all_celulares">
        <header>
        <nav class="celulares_nav">
            <ul class="nav-links">
                <li><a onclick="cargarContenido('../api/Samsung.php')">SAMSUNG</a></li>
                <li><a onclick="cargarContenido('../api/Apple.php')"> APPLE</a></li>
                <li><a onclick="cargarContenido('../api/Huawei.php')">HUAWEI</a></li>
                <li><a onclick="cargarContenido('../api/Xiaomi.php')">XIAOMI</a></li>
            </ul>
           

        </nav>
        <section>
            <marquee behavior="alternate">
                 <h1>Celulares Samsung</h1>
            </marquee>
        </section>
        
        </header>
        <main>
        
            <?php include __DIR__ .'/Tabla_Samsung.php'?>
            
        </main>
    </div>
    <script src="../js/celulares.js"></script>
</body>
</html>