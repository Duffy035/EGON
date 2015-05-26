<?php
session_name('Paracord_webbshop');
session_start();

$currency = '$'; //Currency sumbol or code

//$mysqli = new mysqli("paracordfashion.se.mysql", "paracordfashion", "W6AqFUBB", "paracordfashion"); //Lägg in våra DB uppgifter

$mysqli = new mysqli("paracordfashion.se.mysql", "paracordfashion", "W6AqFUBB", "paracordfashion"); //Lägg in våra DB uppgifter
$mysqli->set_charset("utf8");


/*
//paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'aadammzkii-facilitator_api1.gmail.com'; //PayPal API Username
$PayPalApiPassword 		= '3BJTNYS7HWPQFXVL'; //Paypal API password
$PayPalApiSignature 	= 'AAWSZexDWWJaWIqcYeGO7P--Tcc7AXbo3029V6IVdVacGI4VXnSUh.rw'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/EGON/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/EGON/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel
*/

//paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'aadammzkii-facilitator_api1.gmail.com'; //PayPal API Username
$PayPalApiPassword 		= '3BJTNYS7HWPQFXVL'; //Paypal API password
$PayPalApiSignature 	= 'AAWSZexDWWJaWIqcYeGO7P--Tcc7AXbo3029V6IVdVacGI4VXnSUh.rw'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://www.paracordfashion.se/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://www.paracordfashion.se/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel

//custom paypal settings
/*$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'Sinon_lindqvist_vbg_api1.hotmail.com'; //PayPal API Username
$PayPalApiPassword 		= 'CDB2WU68SVKUGL72'; //Paypal API password
$PayPalApiSignature 	= 'AJ6nzRkeORBhTSSObBemfI8PyGDmAoS-22epqyY8EItDvNLtL622rTkO'; //Paypal API Signature
$PayPalCurrencyCode 	= 'SEK'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://paracordfashion.se/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://paracordfashion.se/paypal-express-checkout/cancel_url.php'; //Cancel URL if user clicks cancel
*/
?>