<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="css/login-regis.css"
    />
    <title>Document</title>
</head>
<body>
    <div class="registro">
        <h2>Registor de usuarios</h2>
        <form action="registroUsuario.php" method="POST">
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <br>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>

            <input type="submit" value="Registrar correo">
        </form>
    </div>
</body>
</html>