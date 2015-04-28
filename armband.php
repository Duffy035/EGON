<?php include'inc/head.php';?>
<?php include'inc/nav.php'; ?> 

<?php

$content ="";
if(isset($_GET['id'])){

	$productid = $_GET['id'];
}

$query = "SELECT * FROM product_details";

	$res = $mysqli->query($query);
	if($res->num_rows > 0)
{
	while($row = $res->fetch_object()){

		$name = htmlspecialchars($row->name);
		$imagelink = htmlspecialchars($row->imagelink);
		$description = htmlspecialchars($row->description);
		$productid = htmlspecialchars($row->productid);
		$content .= <<<END
		
				<div class="col-xs-6 col-md-3">
		    		<div class="thumbnail">
		      			<img src="{$imagelink}" alt="...">
			     			<div class="caption">
			        			<h3>{$name}</h3>
			        			<p>{$description}</p>

			        			<p><a href="produktdetaljer.php? productid={$row->productid}" class="btn btn-default" role="button">Läs mer</a>
			      			</div>
			 		</div>
				</div>
END;
	  }
}

?>

		<div class="container">
			<div class="content">
				<div class="subnav">
					<a href="50cord.php">5.50 Cord</a><br>
					<a href="typecord.php">Type 1 Cord</a><br>
				</div>
				
			<div class="row"> <!--eeeeh?-->			
<?php 

	echo $content;
?>
			</div>
		</div>
	</div>
</body>

</html>