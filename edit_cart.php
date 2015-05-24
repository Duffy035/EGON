<?php

	include('inc/template.php');

//	foreach ($_SESSION['cart'] as $item => $cart_item) {
	$id = $_GET['productid'];
	/*echo $id;
	$id--;
	echo $id;*/
	unset($_SESSION['cart'][$id]);
//}

header("Location:kundvagn.php")
?>