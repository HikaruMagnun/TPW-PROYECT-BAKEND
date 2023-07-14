<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/celulares.css">
    <title>MoViLand</title>
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
                     <h1>Celulares HuaWei</h1>
                </marquee>
            </section>
            
        </header>
        <main>
            <?php include __DIR__ .'php/Tabla_Huawei.php'?>
        </main>

    </div>
    <script src="../js/celulares.js"></script>
</body>
</html>