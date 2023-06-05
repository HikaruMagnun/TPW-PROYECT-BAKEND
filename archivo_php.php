<?php
    include 'conexion.php';
    $query = 'SELECT * FROM "Apple" ';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mostrar el contenido de la tabla Xiaomi
    if (count($result) > 0) {
        echo "Contenido de la tabla Xiaomi:<br>";
        foreach ($result as $row) {
            echo "- ";
            foreach ($row as $column => $value) {
                echo "$column: $value | ";
            }
            echo "<br>";
        }
    } else {
        echo "La tabla Xiaomi está vacía.";
    }

?>
