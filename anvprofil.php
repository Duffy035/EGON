<?php

include('template.php');
if(isset($_POST['fname']))
{
	$query = <<<END
	INSERT INTO products(userid,fname,lname, street, zipcode, email, phone, password)

	VALUES('{$_POST['userid']}','{$_POST['fname']}','{$_POST['lname']}','{$_POST['street']}','{$_POST['zipcode']}','{$_POST['email']}','{$_POST['phone'],
		'{$_POST['password']}')
END;

$mysqli->query($query);
echo 'Du är nu registrerad!';
}

$content = <<<END
<div class="containter">
<form method="post" action="anvprofil.php">
<input type="text" name="userid" placeholder="Användarnamn">
<input type="text" name="fname" placeholder="Förnamn">
<input type="text" name="lname" placeholder="Efternamn"></textarea>
<input type="text" name="street" placeholder="Gatuadress"></textarea>
<input type="text" name="zipcode" placeholder="Postkod"></textarea>
<input type="text" name="email" placeholder="E-mail"></textarea>
<input type="text" name="phone" placeholder="Telefon"></textarea>
<input type="text" name="password" placeholder="Lösenord"></textarea>
<input type="submit" Value="Registrera dig">

END;
echo $navigation;
echo '<div class="container">'. $content .'</div>';
?>