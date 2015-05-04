<?php 
	include('inc/head.php');
	include('inc/nav.php');
	$content = '';

	if(isset($_GET['userid'])) {
		if(isset($_POST['password'])) {
			$query = <<<END
			UPDATE user
			SET fname = '{$_POST['fname']}',
			lname = '{$_POST['lname']}',
			street = '{$_POST['street']}',
			zipcode = '{$_POST['zipcode']}',
			email = '{$_POST['email']}',
			phone = '{$_POST['phone']}',
			password = '{$_POST['password']}'
END;
			$mysqli->query($query);
		}
		$query = <<<END
		SELECT * FROM user
		WHERE userid = '{$_GET['userid']}'
END;
		
		$res = $mysqli->query($query);
		if($res->num_rows > 0) {
			$row = $res->fetch_object();
			$content .= <<<END
			<form method="post" action="edit_user.php?userid={$row->userid}">
			<input type="text" name="fname" value="{$row->fname}"><br>
			<input type="text" name="lname" value="{$row->lname}"><br>
			<input type="text" name="street" value="{$row->street}"><br>
			<input type="text" name="zipcode" value="{$row->zipcode}"><br>
			<input type="text" name="email" value="{$row->email}"><br>
			<input type="text" name="phone" value="{$row->phone}"><br>
			<input type="password" name="password" value="{$row->password}"><br>
			<input type="submit" value="Spara">
			</form>
END;
		}
	}

	echo $content;
	echo $_SESSION['userid'];
?>