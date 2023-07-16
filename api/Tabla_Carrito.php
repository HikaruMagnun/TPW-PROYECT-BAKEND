<?

include __DIR__ . '/conexion.php';

$querySelect = 'SELECT C."Nombre",C."Precio" ,cantidad,P.id_celular, P.id from "Pedidos" P,"Celulares" C where C."id" = P."id_celular" and P.correo = :correo';
$stmtSelect = $db->prepare($querySelect);
$stmtSelect->bindParam(':correo', $correoUsuario);
$stmtSelect->execute();
$row = $stmtSelect->fetch(PDO::FETCH_ASSOC);


foreach ($result as $row) {
   echo '<td>' .$Nombre.' $</td>';
   echo '<td>'.$Precio.'</td>';
   echo '<td>';
   echo '  <button onclick="subirCantidad(1)"> ↑ </button>';
   echo '  <span id="cantidad-1"> '.$cantidad.' </span>';
   echo '  <button onclick="bajarCantidad(1)"> ↓ </button>';
   echo '</td>';
   echo '<td id="total-1">$100</td>';
  echo ' <td><button onclick="eliminarFila(1)">Eliminar</button></td>';
}