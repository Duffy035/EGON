<?php
session_name('Paracord_webbshop');
session_start();
//session_regenerate_id();
$mysqli = new mysqli("localhost", "root", "", "egon"); //Lägg in våra DB uppgifter
$mysqli->set_charset("utf8");

//Session för kundvagn
$ses_cart = false;
if ($ses_cart == false)
{
	$_SESSION['cart'] = array();
	$ses_cart = true;
}
?>