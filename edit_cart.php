<?php

	include('inc/template.php');

//	foreach ($_SESSION['cart'] as $item => $cart_item) {
	$id = $_GET['row_id'];
	/*echo $id;
	$id--;
	echo $id;*/
	unset($_SESSION['cart'][$id--]);
//}

header("Location:kundvagn.php")
?>