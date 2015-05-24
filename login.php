<?php
	include('inc/head.php');
	include('inc/nav.php');

$login = <<<END
	
		<div id="login">
			<br>
			<h3>Redan medlem? Logga in här</h3>
			<form action="login.php" method="post">
				<input type="text" name="email" placeholder="E-postadress">
				<input type="password" name="password" placeholder="Lösenord">
				<input type="submit" value="Logga in" class="btn-default">
			</form>
END;



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
		header("Location:minasidor.php");
		
	}
	else
	{
		 echo ' Du angav fel användarnamn eller lösenord, vänligen prova igen.';
	}
}

$login .= '<hr>';

$register = <<<END
<h3>Registera dig här!</h3>
	<form action="login.php" method="post">
		<input type="text" name="email2" placeholder="E-postadress"><br><br>
		<input type="text" name="fname" placeholder="Förnamn"><br><br>
		<input type="text" name="lname" placeholder="Efternamn"><br><br>
		<input type="text" name="street" placeholder="Gatuadress"><br><br>
		<input type="number" name="zipcode" placeholder="Postnummer"><br><br>
		<input type="number" name="phone" placeholder="Telefonnummer"><br><br>
		<input type="password" name="password2" placeholder="Lösenord"><br><br>
		<input type="submit" value="Registera dig" class="btn-default">
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

echo $login;
echo $register;
include('inc/footer.php'); 
?>