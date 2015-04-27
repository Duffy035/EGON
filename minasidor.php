<?php 
	include'inc/head.php';
	include'inc/nav.php';
	include'inc/template.php';

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
			<input type="text" name="fname" value="{$row->fname}">
			<input type="text" name="lname" value="{$row->lname}">
			<input type="text" name="street" value="{$row->street}">
			<input type="text" name="zipcode" value="{$row->zipcode}">
			<input type="text" name="email" value="{$row->email}">
			<input type="text" name="phone" value="{$row->phone}">
			<input type="password" name="password" value="{$row->password}">
			<input type="submit" value="Spara">
			</form>
END;
		}
	}

	echo $content;
?>