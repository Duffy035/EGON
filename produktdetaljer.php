<script src="lightbox/js/jquery-1.11.0.min.js"></script>
<script src="lightbox/js/lightbox.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/javascript.js"></script>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />

<?php include'inc/head.php';?>
<?php include 'inc/nav.php'; ?>

<?php
$knapp = "";
$content = "";
if(isset($_GET['productid']))

	$query = <<<END
	SELECT * FROM product_details
	WHERE productid = '{$_GET['productid']}'

END;

$res = $mysqli->query($query);
if($res ->num_rows > 0)
{
	$row = $res -> fetch_object();

	$content = <<<END

		<div class="row" id="produktinfo">
  			<div class="col-xs-4">{$row->name}</div>
  			<div class="col-xs-6">Kostnad av {$row->price} riksdaler</div>
			
			<div class="col-xs-4"> 
				<div class="images">
					<a href="img/Cobra.png" data-lightbox="img" data-title="Cobra armband"><img class="thumbimages" src="img/Cobra.png"></a>
					<a href="img/Cobra6.png" data-lightbox="img" data-title="Cobraaa"><img class="thumbimages"src="img/Cobra6.png"></a>
					<a href="img/img3.jpg" data-lightbox="Bilder" data-title="Vetenskapen påvisar: Ungdomar är sjukt biffiga nu för tiden"><img src="img/img3small.jpg"></a>
					<a href="img/img4.png" data-lightbox="Bilder" data-title="Ny SM-mästare: Malin Skoghag"><img src="img/img4small.jpg"></a>
						<!-- för att lägga till nya bilder, gör en ny rad som dessa ovan, byt a href till den stora bilden, och img src till tumnageln-->
				</div>
				<p>{$row->description}</p>
			</div>
		</div>
END;
  
  
	$knapp .=<<<END
		<a href="produktdetaljer.php?id={$row->productid}" class="btn btn-info">Lägg i varukorg</a><br>
END;
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
<?php echo $knapp; ?>
		<!--<div id="buy">
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
		</div>-->
	</div>
</div>

</body>
</html>


<!--*Javascript:
$('select[name=mtrl]').form-control();-->

<!-- javascripten Jonne-->