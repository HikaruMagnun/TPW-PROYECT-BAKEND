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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="all_celulares">
        <header>
            <nav class="celulares_nav">
                <ul class="nav-links">
                    <li><a onclick="cargarContenido('../api/Samsung.php?correo_usuario=<?php echo $correoUsuario ?>')">SAMSUNG</a></li>
                    <li><a onclick="cargarContenido('../api/Apple.php?correo_usuario=<?php echo $correoUsuario ?>')"> APPLE</a></li>
                    <li><a onclick="cargarContenido('../api/Huawei.php?correo_usuario=<?php echo $correoUsuario ?>')">HUAWEI</a></li>
                    <li><a onclick="cargarContenido('../api/Xiaomi.php?correo_usuario=<?php echo $correoUsuario ?>')">XIAOMI</a></li>
                </ul>


            </nav>
            <section>
                <marquee behavior="alternate">
                    <h1>Celulares Samsung</h1>
                </marquee>
            </section>

        </header>
        <main>

            <?php include __DIR__ . '/Tabla_Samsung.php' ?>

        </main>
    </div>
    <script src="../js/celulares.js"></script>
    <script>
        function enviarFormulario(id_celular, correo_usuario) {
            // Crear un objeto con los datos del formulario
            var formData = {
                id_celular: id_celular,
                correo_usuario: correo_usuario
            };

            // Enviar los datos del formulario mediante AJAX
            $.ajax({
                url: '../api/añadirCarrito.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Realizar acciones después de recibir la respuesta del servidor
                    mostrarNotificacion();
                },
                error: function() {
                    console.log('Error al enviar el formulario');
                }
            });
        }




        function mostrarNotificacion() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Tu compra se almaceno en tu carrito',
                showConfirmButton: false,
                timer: 1500
            })
        };
    </script>
</body>

</html>