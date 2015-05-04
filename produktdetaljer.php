<script src="lightbox/js/jquery-1.11.0.min.js"></script>
<script src="lightbox/js/lightbox.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/javascript.js"></script>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />

<?php include'inc/head.php';?>
<?php include'inc/template.php'; ?> 
<?php include'inc/nav.php'; ?>
<?php include'config.php'; ?>

<?php

$content = "";
if(isset($_GET['productid']))

	$query = <<<END
	SELECT * FROM product_details
	WHERE productid = '{$_GET['productid']}'

END;

	$mysqli->query($query);

	$query = <<<END
	SELECT * FROM thumb_img
	WHERE productid = '{$_GET['productid']}'
END;

$res = $mysqli->query($query);
if($res ->num_rows > 0)
{	

	$row = $res -> fetch_object();
	while($row->thumbnail_link <= 3){

	$content = <<<END

		<div class="row" id="produktinfo">
  			<div class="col-xs-4">{$row->name}</div>
  			<div class="col-xs-6">{$row->price}</div>
  			<div class="col-xs-6"><img src="{$row->imagelink}"></div>
			
			<div class="col-xs-4"> 
				<div class="images">
					<a href="{$row->thumbnail_link}" data-lightbox="img" data-title="Cobra armband"><img class="thumbimages" src="{$row->thumbnail_link}"></a>
				</div>
				<p>{$row->description}</p>
			</div>
		</div>
END;
  }
}
?>

<div class="container">
	<div class="content">
	<?php

	echo $content;
	?>
		<div class="row">	
			<div class="col-xs-2 col-md-offset-6">
			<p>Färg 1</p>
				<select class="form-control" id="color1" name="color1">
  					<option value="black">Svart</option>
  					<option value="green">Grön</option>
  					<option value="orange">Orange</option>
  					<option value="red">Röd</option>
  					<option value="blue">Blå</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Färg 2</p>
				<select class="form-control" id="color2" name="color2">
  					<option value="black">Svart</option>
  					<option value="green">Grön</option>
  					<option value="orange">Orange</option>
  					<option value="red">Röd</option>
  					<option value="blue">Blå</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Storlek cm</p>
				<select class="form-control" id="stl" name="stl">
  					<option value="15">15</option>
  					<option value="16">16</option>
  					<option value="17">17</option>
  					<option value="18">18</option>
  					<option value="19">19</option>
  					<option value="20">20</option>
  					<option value="21">21</option>
  					<option value="22">22</option>
  					<option value="23">23</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Spänne</p>
				<select class="form-control" id="mtrl" name="mtrl">
  					<option value="knut">Knut</option>
  					<option value="plast">Plast</option>
  					<option value="metall">Metall</option>
				</select>
			</div>
		</div>

	<?php

	$paypal_btn ="";


		$paypal_btn .= <<<END
	
		<div id="buy">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="D4ZNRTM8G8FRQ">
				<input type="hidden" name="lc" value="SE">
				<input type="hidden" name="item_name" value="{$row->name}">
				<input type="hidden" name="item_number" value="{$row->productid}">
				<input type="hidden" name="amount_1" value="{$row->price}">
				<input type="hidden" name="currency_code" value="SEK">
				<input type="hidden" name="button_subtype" value="services">
				<input type="hidden" name="no_note" value="0">
				<input type="hidden" name="cn" value="Lägg till specialinstruktioner till säljaren:">
				<input type="hidden" name="no_shipping" value="2">
				<input type="hidden" name="undefined_quantity" value="1">
				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
				<input type="image" src="https://www.paypalobjects.com/sv_SE/SE/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – ett tryggt och smidigt sätt att betala på nätet med.">
				<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
			</form>

END;

	echo $paypal_btn;
	?>

		</div>
	</div>
</div>

</body>
</html>






		<!--	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="32S2K4AYCZPZS">

				<input type="hidden" name="item_name" value="{$row->name}">
				<input type="hidden" name="item_number" value="{$row->productid}">
				<input type="hidden" name="amount" value="{$row->price}">
				<input type="hidden" id="colour1" name="item_color1" value="">
				<input type="hidden" id="colour2" name="item_color2" value="">
				<input type="hidden" id="size" name="item_stl" value="">
				<input type="hidden" id="material" name="item_mtrl" value="">

				<input type="image" src="https://www.paypalobjects.com/sv_SE/SE/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – ett tryggt och smidigt sätt att betala på nätet med.">
				<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
			</form> -->