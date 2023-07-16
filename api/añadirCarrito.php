<?php
        include __DIR__ .'/conexion.php';

    $idCelular = $_POST['id_celular'];
    $correoUsuario = $_POST['correo_usuario'];


    // Consulta SELECT para verificar si ya existe un pedido con el mismo correo y ID de celular
    $querySelect = 'SELECT * FROM "Pedidos" WHERE correo = :correo AND id_celular = :idCelular';
    $stmtSelect = $db->prepare($querySelect);
    $stmtSelect->bindParam(':correo', $correoUsuario);
    $stmtSelect->bindParam(':idCelular', $idCelular);
    $stmtSelect->execute();
    $row = $stmtSelect->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $cantidadActualizada = $row['cantidad'] + 1;

        // Consulta UPDATE para modificar la fila existente
        $queryUpdate = 'UPDATE "Pedidos" SET cantidad = :cantidad WHERE correo = :correo AND id_celular = :idCelular';
        $stmtUpdate = $db->prepare($queryUpdate);
        $stmtUpdate->bindParam(':cantidad', $cantidadActualizada);
        $stmtUpdate->bindParam(':correo', $correoUsuario);
        $stmtUpdate->bindParam(':idCelular', $idCelular);

        if ($stmtUpdate->execute()) {
            echo '<script>alert("Pedido actualizado con éxito.");</script>';

        } else {
            echo '<script>alert("Error al actualizar el pedido.");</script>';
        }
    } else {
        // No existe un pedido
        $queryInsert = 'INSERT INTO "Pedidos" (correo, id_celular, cantidad) VALUES (:correo, :idCelular, 1)';
        $stmtInsert = $db->prepare($queryInsert);
        $stmtInsert->bindParam(':correo', $correoUsuario);
        $stmtInsert->bindParam(':idCelular', $idCelular);

        if ($stmtInsert->execute()) {
            echo '<script>alert("Pedido actualizado con éxito.");</script>';
        } else {
            echo '<script>alert("Error al actualizar el pedido.");</script>';
        }
    }

?>