<?




$querySelect = 'SELECT C."Nombre", C."Precio", cantidad, P.id_celular, P.id 
                FROM "Pedidos" P, "Celulares" C 
                WHERE C."id" = P."id_celular" AND P.correo = :correo';

$stmtSelect = $db->prepare($querySelect);
$stmtSelect->bindParam(':correo', $correoUsuario);
$stmtSelect->execute();

$result = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

if ($result) {
    foreach ($result as $row) {
        echo '<tr id="fila-'. $row['id'] .' ">';
        echo '<td>' . $row['Nombre'] . ' $</td>';
        echo '<td>' . $row['Precio'] . '</td>';
        echo '<td>';
        echo '  <button 
        onclick="subirCantidad(' . $row['id'] . ')"> ↑ </button>';
        echo '  <span id="cantidad-' . $row['id'] . '">' . $row['cantidad'] . ' </span>';
        echo '  <button 
        onclick="bajarCantidad(' . $row['id'] . ')"> ↓ </button>';
        echo '</td>';
        echo '<td id="total-1">$100</td>';
        echo ' <td><button onclick="eliminarFila(' . $row['id'] . ')">Eliminar</button></td>';
        echo'</tr>';
    }
}



?>
