<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="css/login.css"
    />
    <title>Document</title>
</head>

<body>
    <div class="inicioSesion">
        <h2>Iniciar sesión</h2>
        <form action="autentificar.php" method="POST">
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <br>
            <br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>

            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
    <h3>No tienes cuenta? </h3>
    <a href="registro.php">REGISTRATE AQUI</a>

</body>