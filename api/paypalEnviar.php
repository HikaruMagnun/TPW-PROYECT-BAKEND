<?php
// Obtén los datos enviados desde el cliente
$business = $_POST['business'];
$cmd = $_POST['cmd'];
$item_name = $_POST['item_name'];
$amount = $_POST['amount'];
$currency_code = $_POST['currency_code'];
$quantity = $_POST['quantity'];
$lc = $_POST['lc'];
$image_url = $_POST['image_url'];
$return_url = $_POST['return'];

// Construye los datos necesarios para la solicitud a PayPal
$data = array(
    'business' => $business,
    'cmd' => $cmd,
    'item_name' => $item_name,
    'amount' => $amount,
    'currency_code' => $currency_code,
    'quantity' => $quantity,
    'lc' => $lc,
    'image_url' => $image_url,
    //'return' => $return_url
);

// Realiza la solicitud a PayPal
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // URL de PayPal Sandbox
//$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; // URL de PayPal en producción

// Construye la URL de redirección de PayPal
$redirect_url = $paypal_url . '?' . http_build_query($data);

// Devuelve la URL de redirección a PayPal
echo $redirect_url;
?>
