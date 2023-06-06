<?php
   include 'php/conexion.php';
   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $msj = $_POST['msj'];
//insert into "Comentarios" values ('ssa','fsd','gsdg');
   $sql = 'INSERT INTO "Comentarios" VALUES (:correo, :nombre, :mensaje)';
   $stmt = $db->prepare($sql);

   // Asignar valores a los parámetros de la consulta
   
   $stmt->bindParam(':correo', $email);
   $stmt->bindParam(':nombre', $nombre);
   $stmt->bindParam(':mensaje', $msj);
   // Ejecutar la consulta
   $stmt->execute();
?>
