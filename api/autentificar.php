<?php
  // Recibir los datos del formulario
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  //conexion
  include 'api/conexion.php';
  //buscamos usuario
  $query = 'SELECT * FROM "USUARIOS" WHERE correo = :correo AND contraseña = :contrasena';
  $stmt = $db->prepare($query);
  $stmt->bindParam(':correo', $correo);
  $stmt->bindParam(':contrasena', $contrasena);
  $stmt->execute();
  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

  if ( $usuario) {
    session_start(); // Iniciar la sesión
    $_SESSION['correo_usuario'] = $correo;
    header("Location: mainPage.php");
    exit();
  } else {
    echo "<script>alert('Usuario o contraseña incorecta'); window.location.href = 'index.php';</script>";
    exit();
  }
  

?>
