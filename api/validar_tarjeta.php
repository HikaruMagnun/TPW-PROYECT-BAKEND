<?php
require 'vendor/autoload.php'; // Incluir el archivo de la biblioteca Stripe

\Stripe\Stripe::setApiKey('sk_test_51NUypjFa5veyFcdqE3DSQspEhpPNtIGCtJn6BBOGFDFpBd2sYESHWtcXMZ94qxHEK4SFje4Tapbjur6WNema7ZfN00vQCwjRSO'); // Reemplaza con tu clave secreta de Stripe

$numero_tarjeta = $_POST['card-number'];

try {
  $tarjeta = \Stripe\Token::create(array(
    'card' => array(
      'number' => $numero_tarjeta,
      'exp_month' => $_POST['expiration-date'], // Reemplaza por el campo adecuado del formulario
      'exp_year' => $_POST['expiration-date'], // Reemplaza por el campo adecuado del formulario
      'cvc' => $_POST['cvv'] // Reemplaza por el campo adecuado del formulario
    )
  ));

  // Si no se producen errores al crear el token, la tarjeta es válida
  echo 'La tarjeta de crédito es válida.';
} catch (Exception $e) {
  // Si se produce una excepción, la tarjeta es inválida
  echo 'La tarjeta de crédito es inválida.';
}
?>
