<?

    include 'php/conexion.php';
    $valor = $_GET['parametro'];
    
    $query = 'SELECT * FROM ' . $valor;

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
    
        echo '<td class="a" height="300" width="330px">';
        echo '<img src="' . $row['Image'] . '" alt="Imagen del producto" width="330" >';
        echo '</td>';
    
        echo '<td width="400px"> <b>' .$row['Nombre'] .'</b> ';
        echo '<ul type="square">';
        
        echo '<li>Pantalla: ' . $row['Pantalla (pulgadas)'] . '</li>';
        echo '<li>Batería: ' . $row['Bateria (mAh)'] . '</li>';
        echo '<li>Sistema Operativo: ' . $row['S.O.'] . '</li>';
        echo '<li>Cámara: ' . $row['Camara (MP)'] . '</li>';
        echo '<li>Capacidad: ' . $row['Capacidad (GB)'] . '</li>';
        echo '<li>Precio: ' . $row['Precio'] . '</li>';
        echo '</ul>';
        echo '<button class="button-add" onclick="add("APPLE IPHONE 14",' . $row['Precio'] .' type="submit")"> COMPRAR S/.'.$row['Precio'].'</button>';
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
