<?php

session_name('Paracord webbshop');
session_start();
session_regenerate_id();



$mysqli = new mysqli("paracordfashion.se.mysql", "	paracordfashion", "	W6AqFUBB", "paracordfashion"); //Lägg in våra DB uppgifter
$mysqli->set_charset("utf8"); 

?>