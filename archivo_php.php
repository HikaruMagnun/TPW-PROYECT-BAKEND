<?php
$host = 'db.fnaxymkdzcvseznghoup.supabase.co';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$password = 'O65zb5JlLLBQvPG1';

// Realizar la conexión
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Obtener el contenido de la tabla Xiaomi
    $query = "SELECT * FROM Xiaomi";
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
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
