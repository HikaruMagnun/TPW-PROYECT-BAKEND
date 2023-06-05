<?php
    include 'php/conexion.php';
    $query = 'SELECT * FROM "Apple" ';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Estructura de la tabla;
    // ID, NOMBRE, PANTALLA , BATERIA, SISTEMA OPERATIVO, CAMARA, CAPACIDAD , IMAGE(link), PRECIO 
    
    $tableRows = ''; // Variable para almacenar las filas de la tabla

    foreach ($result as $row) {
    $tableRows .= '<tr>';
    $tableRows .= '<td>' . $row['ID'] . '</td>';
    $tableRows .= '<td>' . $row['NOMBRE'] . '</td>';
    $tableRows .= '<td>' . $row['PANTALLA'] . '</td>';
    $tableRows .= '<td>' . $row['BATERIA'] . '</td>';
    $tableRows .= '<td>' . $row['SISTEMA OPERATIVO'] . '</td>';
    $tableRows .= '<td>' . $row['CAMARA'] . '</td>';
    $tableRows .= '<td>' . $row['CAPACIDAD'] . '</td>';
    $tableRows .= '<td><img src="' . $row['IMAGE'] . '" width="100"></td>';
    $tableRows .= '<td>' . $row['PRECIO'] . '</td>';
    $tableRows .= '</tr>';
    }
    echo $tableRows;

?>
