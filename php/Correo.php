<?php
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $msj = isset($_POST['msj']) ? $_POST['msj'] : '';

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $msj = filter_var($msj, FILTER_SANITIZE_STRING);

    if (!empty($nombre) && !empty($email) && !empty($msj)) {
        $header = "From: $email";
        $mensaje = $msj . "\nAtentamente: " . $nombre;
        $enviado = mail($email, $mensaje, $header);

        if ($enviado) {
            echo "<script>alert('Correo enviado exitosamente')</script>";
        } else {
            echo "<script>alert('Error al enviar el correo')</script>";
        }
    } else {
        echo "<script>alert('Por favor, complete todos los campos del formulario')</script>";
    }

    echo "<script>setTimeout(\"location.href='Contacto.html'\", 1000)</script>";
?>