<?php
 $id_pedido = $_POST['id_pedido'];
 include __DIR__ .'/conexion.php';
 $querySelect = 'SELECT * FROM "Pedidos" WHERE id = :id ';
 $stmtSelect = $db->prepare($querySelect);
 $stmtSelect->bindParam(':id', $id_pedido);
 $stmtSelect->execute();
 $row = $stmtSelect->fetch(PDO::FETCH_ASSOC);
 
    $cantidadActualizada = $row['cantidad'] + 1;

    // Consulta UPDATE para modificar la fila existente
    $queryUpdate = 'UPDATE "Pedidos" SET cantidad = :cantidad WHERE id = :id ';
    $stmtUpdate = $db->prepare($queryUpdate);
    $stmtSelect->bindParam(':id', $id_pedido);

    $stmtUpdate->execute();

?>