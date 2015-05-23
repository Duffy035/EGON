<?php 
include('inc/template.php');

if(isset($_GET['productid']))
{
	$id = $_GET['productid'];
	$res = $mysqli->query("SELECT * FROM product_details WHERE productid = '{$id}'");
	$row = $res->fetch_object();
	$add_product = array('productid' => $row->productid, 'price' => $row->price, 'name' => $row->name, 'qty' => 1);

	$exists = null;

	foreach ($_SESSION['cart'] as $item => $cart_item) 
	{
		if ($cart_item["productid"] == $id) 
		{
			$exists = true;
			$_SESSION['cart'][$item]['qty']++;
			break;
		}
	}
	if($exists == null)
	{
		{
			array_push($_SESSION['cart'], $add_product);
		}
	}
}
header("Location:produktdetaljer.php?productid={$id}")
?>