<?php
	include('inc/head.php');
	include('inc/nav.php');
	include('js/javascript.js');
	include('config.php');
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


		<div id="buy">
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="ZH7KU6V93FLBE">

				<input type="hidden" name="item_name" value="<?php echo $name ?>">
				<input type="hidden" name="item_number" value="<?php echo $productid ?>">
				<input type="hidden" name="amount" value="<?php echo $price ?>">
				<input type="hidden" id="colour1" name="item_color1" value="">
				<input type="hidden" id="colour2" name="item_color2" value="">
				<input type="hidden" id="size" name="item_stl" value="">
				<input type="hidden" id="material" name="item_mtrl" value="">

				<input type="hidden" name="currency_code" value="SEK">
				<input type="image" src="https://www.paypalobjects.com/sv_SE/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – ett tryggt och smidigt sätt att betala på nätet med.">
				<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
