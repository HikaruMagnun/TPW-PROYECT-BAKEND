<?php
$destino = "contactomovilland@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$aceptarTerminos = isset($_POST['boton']) ? $_POST['boton'] : '';
$suscritoBoletin = isset($_POST['boletin']) ? $_POST['boletin'] : '';

if (!empty($nombre) && !empty($correo) && !empty($mensaje)) {
    if (!empty($aceptarTerminos)) {
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

        if (!empty($suscritoBoletin)) {
            $contenido .= "\nSe suscribió al boletín de noticias";
            echo "<script>alert('Gracias por suscribirte al boletín de noticias')</script>";
        }

        $enviado = mail($destino, "Contacto", $contenido);

        if ($enviado) {
            echo "<script>alert('Correo enviado exitosamente')</script>";
        } else {
            echo "<script>alert('Error al enviar el correo')</script>";
        }
    } else {
        echo "<script>alert('Por favor, acepte los términos y condiciones')</script>";
    }
} else {
    echo "<script>alert('Por favor, complete todos los campos del formulario')</script>";
}

echo "<script>setTimeout(\"location.href='Contacto.html'\", 1000)</script>";
?>
