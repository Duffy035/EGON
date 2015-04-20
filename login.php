
<?php
include('template.php');
$content = <<<END
<div class="container">
<form action="login.php" method="post">
<input type="text" name="username" placeholder="Användarnamn">
<input type="password" name="password" placeholder="Lösenord">
<input type="submit" value="Logga in">
</form>
</div>
END;


echo $navigation;
echo $content;

if (isset($_POST['username']))
{
	$query = <<<END
	SELECT username, password id FROM user
	WHERE username = "{$_POST['userid']}"
	AND password = "{$_POST['password']}"
END;
$res = $mysqli->query($query);
	if($res->num_rows > 0)
	{
		$row = $res->fetch_object();
		$_SESSION["username"] = $row->username;
		$_SESSION["userId"] = $row->id;
		header("Location:index.php");
	}
	else
	{
		 echo '<div class="container"> Du angav fel användarnamn eller lösenord, vänligen prova igen.</div>';
	}
}


?>