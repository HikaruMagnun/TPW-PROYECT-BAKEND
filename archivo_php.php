<?php
$apiUrl = 'https://fnaxymkdzcvseznghoup.supabase.co/rest/v1/Apple?select=*';
$apiKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImZuYXh5bWtkemN2c2V6bmdob3VwIiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTY4NDU1NDgzMywiZXhwIjoyMDAwMTMwODMzfQ.ENla18HCCgESdG3Ks081apJoPOccmH4iVQcmaaHCa5Q'; // Reemplaza con tu propia clave API de Supabase

$options = array(
    'http' => array(
        'header' => "apikey: $apiKey"
    )
);
$context = stream_context_create($options);
$response = file_get_contents($apiUrl, false, $context);

if ($response) {
    $data = json_decode($response, true);
    // Imprimir el resultado
    print_r($data);
} else {
    echo "Error al realizar la solicitud a la API de Supabase.";
}
?>
