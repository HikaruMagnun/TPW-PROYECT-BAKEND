<?php
  // Recibir los datos del formulario
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  //conexion
  include 'php/conexion.php';
  //buscamos usuario
  $query = "SELECT * FROM USUARIOS WHERE correo = :correo";
  $stmt = $db->prepare($query);
  $stmt->bindParam(':correo', $correo);
  $stmt->execute();
  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($usuario && password_verify($contrasena, $usuario['contraseña'])) {
    header("Location: mainPage.php");
    exit();
  } else {
    echo "<h1> error </h1>";
  }
  

?>
