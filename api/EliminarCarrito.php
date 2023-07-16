<?
$id_pedido = $_POST['id_pedido'];
include __DIR__ .'/conexion.php';

// Consulta DELETE para eliminar la fila
$queryDelete = 'DELETE FROM "Pedidos" WHERE id = :id';
$stmtDelete = $db->prepare($queryDelete);
$stmtDelete->bindParam(':id', $id_pedido);
$stmtDelete->execute();
?>