<?php
  // Recibir los datos del formulario
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  //conexion
  include 'php/conexion.php';
  //buscamos usuario
  $query = 'SELECT * FROM "USUARIOS" WHERE correo = :correo AND contraseña = :contrasena';
  $stmt = $db->prepare($query);
  $stmt->bindParam(':correo', $correo);
  $stmt->bindParam(':contrasena', $contrasena);
  $stmt->execute();
  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

  if ( $usuario) {
    header("Location: mainPage.php");
    exit();
  } else {
    echo "<script>alert('Usuario no encontrado');</script>";
  }
  

?>
