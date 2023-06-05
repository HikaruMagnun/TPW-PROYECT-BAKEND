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
    echo "Conexión exitosa a la base de datos PostgreSQL.";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
