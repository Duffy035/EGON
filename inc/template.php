<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<meta charset ="utf-8">
<?php

session_name('Paracord webbshop');
session_start();
session_regenerate_id();

$mysqli = new mysqli("localhost", "andcar10", "29EX4bT7Az", "andcar10_db"); //Lägg in våra DB uppgifter
$mysqli->set_charset("utf8"); 