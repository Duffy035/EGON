<?php include'inc/head.php';?>
	<?php include'inc/template.php'; ?>
	<?php include'inc/nav.php'; ?>

<?php

$login = <<<END
<div class="container">
<form action="login.php" method="post" name="login_form">
<input type="text" name="email" placeholder="E-postadress">
<input type="password" name="password" placeholder="Lösenord">
<input type="submit" value="Logga in">
</form>
</div>
END;

echo $login;

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
		//header("Location:index.php");
		echo $row->userid;
	}
	else
	{
		 echo '<div class="container"> Du angav fel användarnamn eller lösenord, vänligen prova igen.</div>';
	}
}

$register = <<<END

<div class="container">
<hr>
<form action="login.php" method="post" name="register_form">
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

echo $register;

if(isset($_POST['email2']))	
{
	$query = <<<END
	INSERT INTO user(fname,lname,street,zipcode,email,phone,password)
	VALUES ('{$_POST['fname']}','{$_POST['lname']}','{$_POST['street']}','{$_POST['zipcode']}','{$_POST['email2']}','{$_POST['phone']}','{$_POST['password2']}')
END;
$mysqli->query($query);
header('Location:index.php');
} 

?>