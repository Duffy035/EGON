<?php include'inc/head.php';?>
	<?php include'inc/template.php'; ?>
	<?php include'inc/nav.php'; ?>

<?php

$content = <<<END
<div class="container">
<form action="login.php" method="post">
<input type="text" name="email" placeholder="E-postadress">
<input type="password" name="password" placeholder="Lösenord">
<input type="submit" value="Logga in">
</form>
</div>
END;


//echo $navigation;
echo $content;

if (isset($_POST['email']))
{
	$query = <<<END
	SELECT email, password, userid FROM user
	WHERE email = "{$_POST['email']}"
	AND password = "{$_POST['password']}"
END;
$res = $mysqli->query($query);
	if($res->num_rows > 0)
	{
		$row = $res->fetch_object();
		$_SESSION["email"] = $row->email;
		$_SESSION["userid"] = $row->userid;
		session_name("{$_POST['email']}");
		session_start();
		header("Location:index.php");
	}
	else
	{
		 echo '<div class="container"> Du angav fel användarnamn eller lösenord, vänligen prova igen.</div>';
	}
}
$content = <<<END
<div class="container">
<form action="login.php" method="post">
<input type="text" name="email" placeholder="E-postadress">
<input type="password" name="password" placeholder="Lösenord">
<input type="submit" value="Logga in">
</form>
</div>
END;


?>