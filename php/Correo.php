<?php
    $destinatario = 'Joseluis_180302@hotmail.com';
   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $msj = $_POST['msj'];
   $header = "From: $email";
   $mensaje = $msj . "\nAtentamente: " . $nombre;
   mail($destinatario, $mensaje, $header);
   echo "<script>alert('Correo enviado exitosamente')</script>";
   echo "<script>setTimeout(\"location.href='Contacto.html'\", 1000)</script>"
?>
