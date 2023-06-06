<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MoViLand</title>
    <link rel="stylesheet" href="css/celulares.css">
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
                     <h1>Celulares Apple</h1>
                </marquee>
            </section>
            
        </header>
        <main>
            <center>
            <table border="5">
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065300885090/2065300885090_2.jpg" width="330" ></center></td> 
                    <td width="400px"> <center><b>APPLE IPHONE 14</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.1 pulgadas </li>
                            <li>Capacidad: 128GB</li>
                            <li>Bateria: 3279 | mAh</li>
                            <li>Sistema Operativo: iOS 16</li>
                            <li>Camara Frontal: 12MP</li>
                            <li>Camara Posterior: 12MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('APPLE IPHONE 14', 4299)" type="submit">COMPRAR S/ 4,299</center>
                    </td> 
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065287752804/2065287752804_2.jpg" width="330"></center></td> 
                    <td width="400px"><center><b>IPHONE 11</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.1 pulgadas </li>
                            <li>Capacidad: 64 GB</li>
                            <li>Bateria: 3110 | mAh</li>
                            <li>Sistema Operativo: iOS</li>
                            <li>Camara Frontal: 12 MP</li>
                            <li>Camara Posterior: 12 MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('IPHONE 11', 2299)" type="submit">COMPRAR S/ 2,299</center>
                    </td> 
                </tr>
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065300885281/2065300885281_2.jpg" width="330" ></center></td> 
                    <td width="400px"><center><b>APPLE IPHONE 14 PLUS</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.9 pulgadas </li>
                            <li>Capacidad: 256 GB</li>
                            <li>Bateria: 3095 | mAh</li>
                            <li>Sistema Operativo: iOS 16</li>
                            <li>Camara Frontal: 12 MP</li>
                            <li>Camara Posterior:  12MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('>APPLE IPHONE 14 PLUS', 5499)" type="submit">COMPRAR S/ 5,499</center>
                    </td>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065300885380/2065300885380_2.jpg" width="330"></center></td> 
                    <td width="400px"><center><b>APPLE IPHONE 14 PRO MAX</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.7 pulgadas </li>
                            <li>Capacidad: 128 GB</li>
                            <li>Bateria: 4323 | mAh</li>
                            <li>Sistema Operativo: iOS 16</li>
                            <li>Camara Frontal: 12 MP</li>
                            <li>Camara Posterior: 48MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('APPLE IPHONE 14 PRO MAX', 6299)" type="submit">COMPRAR S/ 6,299</center>
                    </td> 
                </tr>
                <tr>
                    <td class="a" height="300"width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065287752965/2065287752965_2.jpg" width="330" ></center></td> 
                    <td width="400px"><center><b>IPHONE 13</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.1 pulgadas </li>
                            <li>Capacidad: 256 GB</li>
                            <li>Bateria: 3227 | mAh</li>
                            <li>Sistema Operativo: iOS</li>
                            <li>Camara Frontal: 12 MP</li>
                            <li>Camara Posterior:  12 MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('IPHONE 13', 4699)" type="submit">COMPRAR S/ 4,699</center>
                    </td>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065299625011/2065299625011_2.jpg" width="330" ></center></td> 
                    <td width="400px"><center><b>IPHONE SE</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.9 pulgadas </li>
                            <li>Capacidad: 64 GB</li>
                            <li>Bateria: 1821 | mAh</li>
                            <li>Sistema Operativo: iOS 15</li>
                            <li>Camara Frontal: 7 MP</li>
                            <li>Camara Posterior:  12MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('IPHONE SE', 2599)" type="submit">COMPRAR S/ 2,599</center>
                    </td>
                </tr>    
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065287753139/2065287753139_2.jpg" width="330" ></center></td> 
                    <td width="400px"><center><b>IPHONE 13 PRO MAX </b></center>
                        <ul type="square">
                            <li>Pantalla: 6.7 pulgadas </li>
                            <li>Capacidad: 128 GB</li>
                            <li>Bateria: 4352 | mAh</li>
                            <li>Sistema Operativo: iOS</li>
                            <li>Camara Frontal: 12 MP</li>
                            <li>Camara Posterior:  12MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('IPHONE 13 PRO MAX', 6199)" type="submit">COMPRAR S/ 6,199</center>
                    </td>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065253555453/2065253555453_2.jpg" width="330" ></center></td> 
                    <td width="400px"><center><b>IPHONE 11 PRO MAX</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.5 pulgadas </li>
                            <li>Capacidad: 64 GB</li>
                            <li>Bateria: 3969 | mAh</li>
                            <li>Sistema Operativo: iOS 13</li>
                            <li>Camara Frontal: 12 MP</li>
                            <li>Camara Posterior:  12MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('IPHONE 11 PRO MAX', 4368)" type="submit">COMPRAR S/ 4,368</center>
                    </td>
                </tr> 
                <tr>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://home.ripley.com.pe/Attachment/WOP_5/2065287753061/2065287753061_2.jpg" width="330" ></center></td> 
                    <td width="400px"><center><b>IPHONE 13 PRO</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.1 pulgadas </li>
                            <li>Capacidad: 256 GB</li>
                            <li>Bateria: 3095 | mAh</li>
                            <li>Sistema Operativo: iOS 16</li>
                            <li>Camara Frontal: 12 MP</li>
                            <li>Camara Posterior: 12MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('IPHONE 13 PRO', 6999)" type="submit">COMPRAR S/ 6,999</center>
                    </td>
                    <td class="a" height="300" width="330px">
                        <center><img src="https://ripleype.imgix.net/https%3A%2F%2Fi.postimg.cc%2FncBV376V%2F1.jpg?w=750&h=555&ch=Width&auto=format&cs=strip&bg=FFFFFF&q=60&trimcolor=FFFFFF&trim=color&fit=fillmax&ixlib=js-1.1.0&s=a026be8f99c3278d8811101dd38dd4af" width="300" ></center></td> 
                    <td width="400px"><center><b>APPLE IPHONE 14 PRO</b></center>
                        <ul type="square">
                            <li>Pantalla: 6.7 pulgadas </li>
                            <li>Capacidad: 256 GB</li>
                            <li>Bateria: 3200 | mAh</li>
                            <li>Sistema Operativo: iOS 16</li>
                            <li>Camara Frontal: 48 MP</li>
                            <li>Camara Posterior:  12MP</li>
                        </ul>
                        <center><button class="button-add" onclick="add('APPLE IPHONE 14 PRO', 4539)" type="submit">COMPRAR S/ 4,539</center>
                    </td>
                </tr>
            </table>
            </center>
        </main>
    </div>
    <script src="js/celulares.js"></script>
</body>
</html>