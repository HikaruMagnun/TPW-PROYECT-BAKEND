<?php
    $correo_usuario=($_GET['correo_usuario']);
    session_start(); // Iniciar la sesión
    echo "El correo electrónico del usuario es: " . $correo_usuario;
    // Verificar si el correo electrónico está almacenado en la variable de sesión
    /*
    if (isset($_SESSION['correo_usuario'])) {
        $correo_usuario=($_GET['correo_usuario']);
        $correo_usuario = $_SESSION['correo_usuario'];
        // Utilizar el correo electrónico como desees
        echo "El correo electrónico del usuario es: " . $correo_usuario;
    } else {
        echo "error al iniciar sesion";
    }
    */
?>