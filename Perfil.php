<?php
session_start(); // Iniciar la sesión
$correo_usuario = $_SESSION['correo_usuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $correo_usuario;
    ?>
    

</body>

</html>
