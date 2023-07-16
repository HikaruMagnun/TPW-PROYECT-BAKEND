<?

include __DIR__ . '/conexion.php';

$query = 'SELECT * FROM "Celulares" WHERE "Marca" = \'Huawei\';';

$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Estructura de la tabla;
// ID, NOMBRE, PANTALLA , BATERIA, SISTEMA OPERATIVO, CAMARA, CAPACIDAD , IMAGE(link), PRECIO 

echo '<div class="carrito_form-celulares">';

foreach ($result as $row) {


    echo '<div class="carrito_div" name="carrito_div">';
    echo '<label for="celular">';
    echo ' <h2>' . $row['Nombre'] . '</h2>';
    echo '<div class="carrito_contenedor-img">';
    echo '<img';
    echo ' src="' . $row['Image'] . '"';
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

    echo '<button class="button-add" onclick="enviarFormulario(' . $row['id'] . ', \'' . $correoUsuario . '\')">COMPRAR S/.' . $row['Precio'] . '</button>';



    echo '</div>';
}
echo '</div>';
