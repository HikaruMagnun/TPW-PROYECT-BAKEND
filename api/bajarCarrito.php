<?php
$id_pedido = $_POST['id_pedido'];
include __DIR__ .'/conexion.php';

$querySelect = 'SELECT * FROM "Pedidos" WHERE id = :id ';
$stmtSelect = $db->prepare($querySelect);
$stmtSelect->bindParam(':id', $id_pedido);
$stmtSelect->execute();
$row = $stmtSelect->fetch(PDO::FETCH_ASSOC);

$cantidad = $row['cantidad'];

if ($cantidad == 1) {
  // Consulta DELETE para eliminar la fila
  $queryDelete = 'DELETE FROM "Pedidos" WHERE id = :id';
  $stmtDelete = $db->prepare($queryDelete);
  $stmtDelete->bindParam(':id', $id_pedido);
  $stmtDelete->execute();
} else {
  $cantidadActualizada = $cantidad - 1;

  // Consulta UPDATE para reducir la cantidad en uno
  $queryUpdate = 'UPDATE "Pedidos" SET cantidad = :cantidad WHERE id = :id ';
  $stmtUpdate = $db->prepare($queryUpdate);
  $stmtUpdate->bindParam(':cantidad', $cantidadActualizada);
  $stmtUpdate->bindParam(':id', $id_pedido);
  $stmtUpdate->execute();
}

?>