<?php
session_name('Paracord_webbshop');
session_start();

$currency = 'SEK'; //Currency sumbol or code

//$mysqli = new mysqli("paracordfashion.se.mysql", "paracordfashion", "W6AqFUBB", "paracordfashion"); //Lägg in våra DB uppgifter

$mysqli = new mysqli("localhost", "root", "", "egon"); //Lägg in våra DB uppgifter
$mysqli->set_charset("utf8");


//paypal settings
/*$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'paypaluser@somemail.com'; //PayPal API Username
$PayPalApiPassword 		= '190798792445'; //Paypal API password
$PayPalApiSignature 	= '797987709709709oipuiou98Eq.Gufar'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/shopping-cart/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/shopping-cart/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel
*/
//custom paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'Sinon_lindqvist_vbg_api1.hotmail.com'; //PayPal API Username
$PayPalApiPassword 		= 'CDB2WU68SVKUGL72'; //Paypal API password
$PayPalApiSignature 	= 'AJ6nzRkeORBhTSSObBemfI8PyGDmAoS-22epqyY8EItDvNLtL622rTkO'; //Paypal API Signature
$PayPalCurrencyCode 	= 'SEK'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/EGON/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/EGON/cancel_url.php'; //Cancel URL if user clicks cancel
?>