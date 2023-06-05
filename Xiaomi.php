<!DOCTYPE html>
<php lang="es">
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
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/1/_/1_10_.jpg" width="270" ></center></td> 
                    <td width="400px"><center><b>Xiaomi Redmi 12C Graphite Gray</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.5 pulgadas </li>
                            <li>Capacidad: 64GB</li>
                            <li>Memoria RAM: 4GB</li>
                            <li>Bateria: 5000 | mAh</li>
                            <li>Sistema Operativo: MIUI 13</li>
                            <li>Camara Frontal: 5MP</li>
                            <li>Camara Posterior: 50MP+2MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('Xiaomi Redmi 12C Graphite Gray', 649)" type="submit">COMPRAR S/ 649</center>
                    </td> 
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/p/o/poco-c40_black.jpg" width="270"></center></td> 
                    <td width="400px"><center><b>POCO C40</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.71 pulgadas </li>
                            <li>Capacidad: 64GB</li>
                            <li>Memoria RAM: 4GB</li>
                            <li>Bateria: 6000 | mAh</li>
                            <li>Sistema Operativo: MIUI 13</li>
                            <li>Camara Frontal: 5MP</li>
                            <li>Camara Posterior: 13MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('POCO C40', 599)" type="submit">COMPRAR S/ 599</center>
                    </td> 
                </tr>
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/x/i/xiaomi12t_blue.jpg" width="250" ></center></td> 
                    <td width="400px"><center><b>XIAOMI 12T</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.9 pulgadas </li>
                            <li>Capacidad: 256GB</li>
                            <li>Memoria RAM: 8GB</li>
                            <li>Bateria: 5000 | mAh</li>
                            <li>Sistema Operativo: MIUI 11</li>
                            <li>Camara Frontal: 20MP</li>
                            <li>Camara Posterior: 108MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('XIAOMI 12T', 2199)" type="submit">COMPRAR S/ 2,199</center>
                    </td>
                    <td class="a" height="300"width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/p/o/poco_m5_s_negro.png" width="270"></center></td> 
                    <td width="400px"><center><b>POCO M5s</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.43 pulgadas </li>
                            <li>Capacidad: 128GB</li>
                            <li>Memoria RAM: 6GB</li>
                            <li>Bateria: 5000 | mAh</li>
                            <li>Sistema Operativo: Android 12</li>
                            <li>Camara Frontal: 13MP</li>
                            <li>Camara Posterior: 64MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('POCO M5s', 969)" type="submit">COMPRAR S/ 969</center>
                    </td> 
                </tr>
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/p/o/poco_x5_5g_black-a.jpg" width="250" ></center></td> 
                    <td width="400px"><center><b>Poco X5 5G</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.67 pulgadas </li>
                            <li>Capacidad: 256GB</li>
                            <li>Memoria RAM: 8GB</li>
                            <li>Bateria: 5000 | mAh</li>
                            <li>Sistema Operativo: Android 12</li>
                            <li>Camara Frontal: 13MP</li>
                            <li>Camara Posterior: 48MP+8MP+2MP</li>
                            <li>Resolución: HD+ de 1.280 x 720</li>
                        </ul>
                        <center><button class="button-add" onclick="add('Poco X5', 1332)" type="submit">COMPRAR S/ 1,332</center>
                    </td>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/1/_/1_9_.jpg" width="350" height="270"></center></td> 
                    <td width="400px"><center><b>Redmi Note 11 PRO</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.6 pulgadas </li>
                            <li>Capacidad: 128GB</li>
                            <li>Memoria RAM: 6GB</li>
                            <li>Bateria: 4500 | mAh</li>
                            <li>Sistema Operativo: Android 11</li>
                            <li>Camara Frontal: 16MP</li>
                            <li>Camara Posterior: 108MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('Redmi Note 11 PRO', 1639)" type="submit">COMPRAR S/ 1,639</center>
                    </td>
                </tr>    
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/1/_/1_5.jpg" width="250" ></center></td> 
                    <td width="400px"><center><b>Poco X5 Pro 5G</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.67 pulgadas </li>
                            <li>Capacidad: 256GB</li>
                            <li>Memoria RAM: 8GB</li>
                            <li>Bateria: 5000 | mAh</li>
                            <li>Sistema Operativo: Android 12</li>
                            <li>Camara Frontal: 16MP</li>
                            <li>Camara Posterior: 108MP+8MP+2MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('Poco X5 Pro', 1666)" type="submit">COMPRAR S/ 1,666</center>
                    </td>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/1/_/1_19_.jpg" width="250" ></center></td> 
                    <td width="400px"><center><b>Xiaomi Redmi 12C</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.71 pulgadas </li>
                            <li>Capacidad: 64GB</li>
                            <li>Memoria RAM: 3GB</li>
                            <li>Bateria: 5000 | mAh</li>
                            <li>Sistema Operativo: Android 13</li>
                            <li>Camara Frontal: 5MP</li>
                            <li>Camara Posterior: 50MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('Xiaomi Redmi 12C', 599)" type="submit">COMPRAR S/ 599</center>
                    </td>
                </tr> 
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/x/i/xiaomi-12-lite_verde.jpg" width="250" ></center></td> 
                    <td width="400px"><center><b>Xiaomi 12 Lite</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.55 pulgadas </li>
                            <li>Capacidad: 128GB</li>
                            <li>Memoria RAM: 8GB</li>
                            <li>Bateria: 4300 | mAh</li>
                            <li>Sistema Operativo: Android 12</li>
                            <li>Camara Frontal: 32MP</li>
                            <li>Camara Posterior: 108MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('Xiaomi 12 Lite', 1749)" type="submit">COMPRAR S/ 1,749</center>
                    </td>
                    <td class="a" height="300px" width="330px">
                        <center><img src="https://xiaomiperu.com/media/catalog/product/cache/deaf12c726c019462dcd02884cec40ac/r/e/redmi-a1-azul.jpg" width="250" ></center></td> 
                    <td width="400px"><center><b>Redmi A1 PLUS</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.52 pulgadas </li>
                            <li>Capacidad: 64GB</li>
                            <li>Memoria RAM: 2GB</li>
                            <li>Bateria: 5000 | mAh</li>
                            <li>Sistema Operativo: Android 12</li>
                            <li>Camara Frontal: 5MP</li>
                            <li>Camara Posterior: 50MP+2MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('Redmi A1 PLUS', 499)" type="submit">COMPRAR S/ 499</center>
                    </td>
                </tr>
            </table>
            </center>
        </main> 
            
    </div>
    <script src="js/celulares.js"></script>   
</body>
</html>