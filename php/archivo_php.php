<?

    include 'php/conexion.php';
    $query = 'SELECT * FROM "Apple" ';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Estructura de la tabla;
    // ID, NOMBRE, PANTALLA , BATERIA, SISTEMA OPERATIVO, CAMARA, CAPACIDAD , IMAGE(link), PRECIO 
   
    $tableRows = ''; // Variable para almacenar las filas de la tabla
    $counter = 0;
    foreach ($result as $row) {
        if ($counter % 4 === 0) {
            echo '<tr>';
        }
    
        echo '<td>';
        echo '<img src="' . $row['Image'] . '" alt="Imagen del producto">';
        echo '</td>';
    
        echo '<td>';
        echo '<h4>' . $row['Nombre'] . '</h4>';
        echo '<p>Pantalla: ' . $row['Pantalla (pulgadas)'] . '</p>';
        echo '<p>Batería: ' . $row['Bateria (mAh)'] . '</p>';
        echo '<p>Sistema Operativo: ' . $row['S.O.'] . '</p>';
        echo '<p>Cámara: ' . $row['Camara (MP)'] . '</p>';
        echo '<p>Capacidad: ' . $row['Capacidad (GB)'] . '</p>';
        echo '<p>Precio: ' . $row['Precio'] . '</p>';
        echo '</td>';
    
        $counter++;
        if ($counter % 4 === 0) {
            echo '</tr>';
        }
    }
    if ($counter % 4 !== 0) {
        echo '</tr>';
    }   
    
    

?>
