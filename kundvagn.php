<?php
	include('inc/head.php');
	include('inc/nav.php')
?>




<div class="container">
	<h3>Här ser du din varukorg!</h3><hr>
	<?php
	$row_id = 0;
	 foreach ($_SESSION['cart'] as $item => $cart_item) { $row_id++; ?>
		<strong>Namn:</strong> <?php echo $cart_item["name"]; ?>
		<strong>Á pris:</strong> <?php echo $cart_item['price'] ?> 
		<strong>Antal:</strong><?php echo $cart_item['qty'] ?>
		<strong>Total Pris:</strong> <?php echo $cart_item['price'] * $cart_item['qty']; ?> <a href="edit_cart.php?row_id=<?php echo $row_id; ?>">Ta bort</a><hr>
	<?php } ?>
</div>

