<?php
curl_setopt_array($curl, [
    CURLOPT_URL => "https://fnaxymkdzcvseznghoup.supabase.co/rest/v1/Apple?select=*",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
      "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImZuYXh5bWtkemN2c2V6bmdob3VwIiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTY4NDU1NDgzMywiZXhwIjoyMDAwMTMwODMzfQ.ENla18HCCgESdG3Ks081apJoPOccmH4iVQcmaaHCa5Q"
    ],
  ]);
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
?>
