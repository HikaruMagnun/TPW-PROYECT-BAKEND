<?php
  // Recibir los datos del formulario
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];
  //conexion
  include 'php/conexion.php';
  //validamos si el usuario a un no este registrado
  $query = 'SELECT * FROM "USUARIOS" WHERE correo = :correo ';
  $stmt = $db->prepare($query);
  $stmt->bindParam(':correo', $correo);
  $stmt->bindParam(':contraseña', $contraseña);
  $stmt->execute();
  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

  if ( !$usuario) {
    $query = 'insert into "USUARIOS" values (:correo,:contraseña);';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':contraseña', $contraseña);
    $stmt->execute();
    header("Location: index.php");
    exit();
  } else {
    echo "<h1> error </h1>";
  }
  

?>