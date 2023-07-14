<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MoViLand</title>
    <link rel="stylesheet" href="../css/celulares.css">
</head>
<body>
    <div class="all_celulares">
        <header>
            <nav class="celulares_nav">
                <ul class="nav-links">
                    <li><a onclick="cargarContenido('../Samsung.php')">SAMSUNG</a></li>
                    <li><a onclick="cargarContenido('../Apple.php')"> APPLE</a></li>
                    <li><a onclick="cargarContenido('../Huawei.php')">HUAWEI</a></li>
                    <li><a onclick="cargarContenido('../Xiaomi.php')">XIAOMI</a></li>
                </ul>
                <button id="checkout" class="button-checkout" onclick="pay()">PAGAR</button>
    
            </nav>
            <section>
                <marquee behavior="alternate">
                     <h1>Celulares Apple</h1>
                </marquee>
            </section>
            
        </header>
        <main>
            
            <?php include __DIR__ .'php/Tabla_Apple.php'?>
            
        </main>
        

    </div>
    <script src="../js/celulares.js"></script>
</body>
</html>