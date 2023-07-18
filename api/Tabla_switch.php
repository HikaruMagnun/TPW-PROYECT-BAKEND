<?php
include __DIR__ . '/conexion.php';
$correo = $_POST['correo'];


try {
   // Iniciar una transacción
   $db->beginTransaction();
    // Consulta para eliminar las filas según el correo
    $eliminarStmt = $db->prepare("DELETE FROM Pedidos WHERE correo = :correo");
    $eliminarStmt->bindParam(':correo', $correo);
    $eliminarStmt->execute();

    // Consulta para insertar las filas eliminadas en la tabla Pedidos_Pagados
    $insertarStmt = $db->prepare("INSERT INTO Pedidos_Pagados (id, correo, id_celular, cantidad) SELECT id, correo, id_celular, cantidad FROM Pedidos WHERE correo = :correo");
    $insertarStmt->bindParam(':correo', $correo);
    $insertarStmt->execute();

    // Confirmar la transacción
    $db->commit();
    header("Location:/api/Carrito.php?correo_usuario=". $correo);

    echo "Filas eliminadas y trasladadas a Pedidos_Pagados correctamente.";
} catch (PDOException $e) {
    // Revertir la transacción en caso de error
    $db->rollBack();
    echo "Error: " . $e->getMessage();
}
