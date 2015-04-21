<?php include'inc/head.php';?>
<?php include'inc/template.php'; ?> 
<?php include 'inc/nav.php'; ?>


<?php

$content ="";
if(isset($_GET['id'])){

	$productid = $_GET['id'];

}

$query = "SELECT productid, name, imagelink, thumbnail_link, description, price
FROM product_details";

$res = $mysqli->query($query);
while($row = $res->fetch_object()){

		$price = $row->price;
		$name = $row->name;
		$productid = $row->productid;
		$imagelink = $row->imagelink;
		$thumbnail_link = $row->thumbnail_link;
		$description = $row->description;
  }

?>


<div class="container">
	<div class="content">
		<div class="row" id="produktinfo">
  			<div class="col-xs-4"><?php echo $name ?></div>
  			<div class="col-xs-6"><?php echo $price ?></div>
			
			<div class="col-xs-4"> 
				<div class="images">
					<a href="img/img1.png" data-lightbox="Bilder" data-title="Falken dominerar."><img src="img/img1small.jpg"></a>
					<a href="img/img2.jpg" data-lightbox="Bilder" data-title="Pelle Jönsson"><img src="img/img2small.jpg"></a>
					<a href="img/img3.jpg" data-lightbox="Bilder" data-title="Vetenskapen påvisar: Ungdomar är sjukt biffiga nu för tiden"><img src="img/img3small.jpg"></a>
					<a href="img/img4.png" data-lightbox="Bilder" data-title="Ny SM-mästare: Malin Skoghag"><img src="img/img4small.jpg"></a>
						<!-- för att lägga till nya bilder, gör en ny rad som dessa ovan, byt a href till den stora bilden, och img src till tumnageln-->
				</div>
				<p>Här kommer lite info om produkten</p>
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-2 col-md-offset-6">
			<p>Färg 1</p>
			<input type="select" name="color1">
				<select class="form-control">
  					<option value="black">Svart</option>
  					<option value="green">Grön</option>
  					<option value="orange">Orange</option>
  					<option value="red">Röd</option>
  					<option value="blue">Blå</option>
				</select>
			</input>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Färg 2</p>
			<input type="select" name="color2">
				<select class="form-control">
  					<option value="black">Svart</option>
  					<option value="green">Grön</option>
  					<option value="orange">Orange</option>
  					<option value="red">Röd</option>
  					<option value="blue">Blå</option>
				</select>
			</input>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Storlek cm</p>
			<input type="select" name="stl">
				<select class="form-control">
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
			</input>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Spänne</p>
			<input type="select" name="mtrl">
				<select class="form-control">
  					<option value="knut">Knut</option>
  					<option value="plast">Plast</option>
  					<option value="metall">Metall</option>
				</select>
			</input>
			</div>
		</div>
		<div id="buy">
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="ZH7KU6V93FLBE">

				<input type="hidden" name="item_name" value="<?php echo $name ?>">
				<input type="hidden" name="item_number" value="{$row->"
				<input type="hidden" name="amount" value=""

				<input type="hidden" name="currency_code" value="SEK">
				<input type="image" src="https://www.paypalobjects.com/sv_SE/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – ett tryggt och smidigt sätt att betala på nätet med.">
				<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>
</div>

</body>
</html>
