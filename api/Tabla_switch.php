<?php
include __DIR__ . '/conexion.php';
$correo = $_POST['correo'];




    // Consulta para insertar las filas seleccionadas en Pedidos_Pagados
    $insertarStmt = $db->prepare('INSERT INTO "Pedidos_Pagados" (id, correo, id_celular, cantidad)
        SELECT id, correo, id_celular, cantidad
        FROM "Pedidos"
        WHERE correo = :correo');
    $insertarStmt->bindParam(':correo', $correo);
    $insertarStmt->execute();

    echo "Filas insertadas en Pedidos_Pagados correctamente.";

    $eliminarStmt = $db->prepare('DELETE FROM "Pedidos" WHERE correo = :correo');
    $eliminarStmt->bindParam(':correo', $correo);
    $eliminarStmt->execute();

    echo "Filas eliminadas correctamente.";
    echo "<script> window.location.href = '/api/Carrito.php';</script>";







echo "Filas eliminadas y trasladadas a Pedidos_Pagados correctamente.";

?>