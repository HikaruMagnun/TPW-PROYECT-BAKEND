<?php
$host = 'db.fnaxymkdzcvseznghoup.supabase.co';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$password = 'O65zb5JlLLBQvPG1';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
