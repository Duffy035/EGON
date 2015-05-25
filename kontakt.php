<?php include'inc/head.php';?>
<?php include'inc/nav.php'; ?> 
<script src="js/javascript.js"></script>


		<div class="mail">
			<p> Skriv ett mail till mig om du har något du vill förtälja!</p>
			<form class="myform" action="kontakt.php" method="post">
				<input type="text" name="name" placeholder="Namn">
				<br>
				<br>
				<textarea name="msg" placeholder="Meddelande"></textarea>
				<br><br>
				<input class="btn btn-default" type="submit" value="Skicka">
			</form>
		</div>

<?php

$to = "jonnwi12@student.hh.se";
$subject = "Test-mail";
$msg = $_POST["msg"];
$headers = "From: " . $_POST["name"];
mail($to, $subject, $msg, $headers);

?>
<?php include'inc/footer.php'; ?> 
