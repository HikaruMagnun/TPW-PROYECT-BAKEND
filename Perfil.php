<!DOCTYPE html>
<html lang="en">
<?php
    session_start(); // Iniciar la sesión

    // Verificar si el correo electrónico está almacenado en la variable de sesión
    if (isset($_SESSION['correo_usuario'])) {
        $correo_usuario = $_SESSION['correo_usuario'];
        // Utilizar el correo electrónico como desees
        echo "El correo electrónico del usuario es: " . $correo_usuario;
    } else {
        echo "error al iniciar sesion";
    }
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>

</html>
