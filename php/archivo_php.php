<?php
    include 'php/conexion.php';
    $query = 'SELECT * FROM "Apple" ';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Estructura de la tabla;
    // ID, NOMBRE, PANTALLA , BATERIA, SISTEMA OPERATIVO, CAMARA, CAPACIDAD , IMAGE(link), PRECIO 
    
    $tableRows = ''; // Variable para almacenar las filas de la tabla

    
    $tableRows .= '<h1> Esto es codigo html </h1>';
    echo $tableRows;

?>
