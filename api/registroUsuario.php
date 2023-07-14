<?php
    // Recibir los datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    //conexion
    include __DIR__ . '/conexion.php';
    //buscamos usuario
    $query = 'SELECT * FROM "USUARIOS" WHERE correo = :correo';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

  if ( !$usuario) {
    $query = 'INSERT into "USUARIOS" values (:correo,:contrasena);';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->execute();
    header("Location: index.php");
    exit();
  } else {
    echo "<script>alert('correo ya registrado'); window.location.href = 'registro.php';</script>";
    exit();
  }
?>