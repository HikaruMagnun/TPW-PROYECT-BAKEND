<?

    include 'php/conexion.php';
    $query = 'SELECT * FROM "Xiaomi" ';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Estructura de la tabla;
    // ID, NOMBRE, PANTALLA , BATERIA, SISTEMA OPERATIVO, CAMARA, CAPACIDAD , IMAGE(link), PRECIO 
   
    echo '<div class="carrito_form-celulares">';

    foreach ($result as $row) {
        
    
        echo '<div class="carrito_div" name="carrito_div">';
        echo '<label for="celular">';
        echo ' <h2>'. $row['Nombre'] .'</h2>';
        echo '<div class="carrito_contenedor-img">';
        echo '<img';
        echo ' src="'.$row['Image'].'"';
        echo '/>';
        echo '</div>';
        echo '<ul>';
        echo '<li>Pantalla: ' . $row['Pantalla (pulgadas)'] . '</li>';
        echo '<li>Batería: ' . $row['Bateria (mAh)'] . '</li>';
        echo '<li>Sistema Operativo: ' . $row['S.O.'] . '</li>';
        echo '<li>Cámara: ' . $row['Camara (MP)'] . '</li>';
        echo '<li>Capacidad: ' . $row['Capacidad (GB)'] . '</li>';
        echo '</ul>';
        echo '</label>';
        echo '<button class="button-add" onclick="add("APPLE IPHONE 14",' . $row['Precio'] .' type="submit")"> COMPRAR S/.'.$row['Precio'].'</button>';
        echo '</div>';
        
    }
    echo '</div>';
    
    

?>
