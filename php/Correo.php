<?php
if (isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['email'])
    && !empty($_POST['msj'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $msj = $_POST['msj'];
        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $mail= @mail($email,$msj,$header,$telefono);
        if ($mail){
            echo "<h3>Envia correctamente</h3>";
        }
    }
}

