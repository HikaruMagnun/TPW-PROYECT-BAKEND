<?php
  // Recibir los datos del formulario
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  //conexion
  include __DIR__ . '/conexion.php';

  //buscamos usuario
  $query = 'SELECT * FROM "USUARIOS" WHERE correo = :correo AND contraseña = :contrasena';
  $stmt = $db->prepare($query);
  $stmt->bindParam(':correo', $correo);
  $stmt->bindParam(':contrasena', $contrasena);
  $stmt->execute();
  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

  if ( $usuario) {
    setcookie('correo_usuario', $correo, time() + (86400 * 30), '/');
    header("Location:/mainPage.html");
    exit();
  } else {
    echo "<script>alert('Usuario o contraseña incorecta'); window.location.href = '/index.html';</script>";
    exit();
  }
  

?>
