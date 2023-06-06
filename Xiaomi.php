<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/celulares.css">
    <title>MoViLand</title>
</head>
<body>
    <div class="all_celulares">
        <header>
        
            <nav class="celulares_nav">
                <ul class="nav-links">
                    <li><a onclick="cargarContenido('Samsung.php')">SAMSUNG</a></li>
                    <li><a onclick="cargarContenido('Apple.php')"> APPLE</a></li>
                    <li><a onclick="cargarContenido('Huawei.php')">HUAWEI</a></li>
                    <li><a onclick="cargarContenido('Xiaomi.php')">XIAOMI</a></li>
                </ul>
                <button id="checkout" class="button-checkout" onclick="pay()">PAGAR</button>
            </nav>
            <section>
                <marquee behavior="alternate">
                     <h1>Celulares Xiaomi</h1>
                </marquee>
            </section>
            
        </header>
        <main>
            <center>
            <table border="5">
                <?php include 'php/Tabla_Xiaomi.php'?>
            </table>
            </center>
        </main> 
            
    </div>
    <script src="js/celulares.js"></script>   
</body>
</html>