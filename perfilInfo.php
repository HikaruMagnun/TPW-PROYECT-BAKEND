<?php
session_start(); // Iniciar la sesión

// Verificar si el correo electrónico está almacenado en la variable de sesión
if (isset($_SESSION['correo_usuario'])) {
    $correo_usuario = $_SESSION['correo_usuario'];
    // Utilizar el correo electrónico como desees
    echo "El correo electrónico del usuario es: " . $correo_usuario;
} else {
    // Redireccionar si el correo electrónico no está presente en la variable de sesión
    header("Location: index.php");
    exit();
}
?>
