<?php
$destino="contactomovilland@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
if (!empty($nombre) && !empty($correo) && !empty($mensaje)) {
    $contenido =  "\nNombre: ". $nombre . "\nCorreo: " .$correo. "\nTelefono: ". $telefono."\nMensaje: "
    .$mensaje;
    $enviado = mail($destino,"Contacto",$contenido);
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