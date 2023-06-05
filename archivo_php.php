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
    // Obtener las tablas disponibles
    $query = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

    // Mostrar las tablas
    if (count($tables) > 0) {
        echo "Tablas disponibles:<br>";
        foreach ($tables as $table) {
            echo "- $table<br>";
        }
    } else {
        echo "No hay tablas disponibles en la base de datos.";
    }
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
