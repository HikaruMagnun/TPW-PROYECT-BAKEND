<?

    include __DIR__ .'/conexion.php';
    
    $query = 'SELECT * FROM "Celulares" WHERE "Marca" = \'Samsung\';';

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
        echo '<li>Pantalla: ' . $row['Pantalla(Pulgadas)'] . ' pulgadas</li>';
        echo '<li>Batería: ' . $row['Bateria(mAh)'] . ' mAh</li>';
        echo '<li>Sistema Operativo: ' . $row['S.O.'] . '</li>';
        echo '<li>Cámara: ' . $row['Camara(MP)'] . ' MP</li>';
        echo '<li>Capacidad: ' . $row['Capacidad(GB)'] . ' GB</li>';
        echo '</ul>';
        echo '</label>';

        

        echo '<form method="post" action="api/añadirCarrito.php">';
        echo '<input type="hidden" name="id_celular" value="' . $row['id'] . '" />';
        echo '<input type="hidden" name="correo_usuario" value="' . $correoUsuario . '" />';
        echo '<button class="button-add" type="submit">COMPRAR S/.' . $row['Precio'] . '</button>';
        echo '</form>';

        echo '</div>';
        
    }
    echo '</div>';
