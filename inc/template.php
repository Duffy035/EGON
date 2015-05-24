<?php
session_name('Paracord_webbshop');
session_start();

$currency = '$'; //Currency sumbol or code

//$mysqli = new mysqli("paracordfashion.se.mysql", "paracordfashion", "W6AqFUBB", "paracordfashion"); //Lägg in våra DB uppgifter

$mysqli = new mysqli("localhost", "root", "", "egon"); //Lägg in våra DB uppgifter
$mysqli->set_charset("utf8");


//paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'paypaluser@somemail.com'; //PayPal API Username
$PayPalApiPassword 		= '190798792445'; //Paypal API password
$PayPalApiSignature 	= '797987709709709oipuiou98Eq.Gufar'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/shopping-cart/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/shopping-cart/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel


?>