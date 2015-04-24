<?php include'inc/head.php';?>
<?php include'inc/nav.php'; ?>

<?php

if (isset($_POST['email']))
{
	$query = <<<END
	SELECT email, password, userid, fname, lname FROM user
	WHERE email = "{$_POST['email']}"
	AND password = "{$_POST['password']}"
END;
$res = $mysqli->query($query);
	if($res->num_rows > 0)
	{
		$row = $res->fetch_object();
		$_SESSION["fname"] = $row->fname;
		$_SESSION["userid"] = $row->userid;
		//header("Location:index.php");
		$test = <<<END
		Inloggad som {$_SESSION['fname']}
END;

	}
	else
	{
		 echo '<div class="container"> Du angav fel användarnamn eller lösenord, vänligen prova igen.</div>';
	}
}

$login = <<<END
<div class="container">
<form action="login.php" method="post">
<input type="text" name="email" placeholder="E-postadress">
<input type="password" name="password" placeholder="Lösenord">
<input type="submit" value="Logga in">
</form>
<hr>
</div>
END;

echo $login;

echo $_SESSION['fname'];





$register = <<<END
<div class="container">
<form action="login.php" method="post">
<input type="text" name="email2" placeholder="E-postadress"><br>
<input type="text" name="fname" placeholder="Förnamn"><br>
<input type="text" name="lname" placeholder="Efternamn"><br>
<input type="text" name="street" placeholder="Gatuadress"><br>
<input type="number" name="zipcode" placeholder="Postnummer"><br>
<input type="number" name="phone" placeholder="Telefonnummer"><br>
<input type="password" name="password2" placeholder="Lösenord"><br>
<input type="submit" value="Registera dig">
</form>
</div>
END;

if(isset($_POST['email2']))	
{
	$query = <<<END
	INSERT INTO user(fname,lname,street,zipcode,email,phone,password)
	VALUES ('{$_POST['fname']}','{$_POST['lname']}','{$_POST['street']}','{$_POST['zipcode']}','{$_POST['email2']}','{$_POST['phone']}','{$_POST['password2']}')
END;
$mysqli->query($query);
header('Location:index.php');
} 


echo $register;
//echo $test;

?>