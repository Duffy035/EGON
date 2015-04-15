<?php include'inc/head.php';?>
<?php include'inc/template.php'; ?>
<?php include'inc/nav.php'; ?> 
<div class="container">
	<div class="content">	
		<form action="kontakt.php" method="post">
			<input type="text" name="name" placeholder="Namn">
			<br>
			<br>
			<textarea name="msg" placeholder="Meddelande"></textarea>
			<br>
			<input class="btn btn-default" type="submit" value="Skicka">
		</form>

<?php

if(isset($_POST))
{
	$content = <<<END
	<div class="container">
	<h3>Meddelandet är  skickat</h3>
	Namn: {$_POST["name"]}
	<br>
	Meddelande: {$_POST["msg"]}
	</div>
END;

$to = "jonnwi12@student.hh.se";
$subject = "Test-mail";
$msg = $_POST["msg"];
$headers = "From: " . $_POST["name"];
mail($to, $subject, $msg, $headers);
}
echo $content;

?>

	</div>
</div>