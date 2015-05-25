<?php 
	include('inc/head.php');
	include('inc/nav.php');
	$content = '';

	if(isset($_SESSION['userid'])) {
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
			WHERE userid = '{$_SESSION['userid']}' AND password = '{$_POST['password']}'
END;
			$mysqli->query($query);
		}

		$query = <<<END
		SELECT * FROM user
		WHERE userid = '{$_SESSION['userid']}'
END;
		
		$res = $mysqli->query($query);
		if($res->num_rows > 0) {
			$row = $res->fetch_object();
			$content .= <<<END
			<div id="minasidor">
				<h3> Mina sidor </h3>
				<form method="post" action="minasidor.php"  class="myform">
					<input type="text" name="fname" value="{$row->fname}"><br>
					<input type="text" name="lname" value="{$row->lname}"><br>
					<input type="text" name="street" value="{$row->street}"><br>
					<input type="text" name="zipcode" value="{$row->zipcode}"><br>
					<input type="text" name="email" value="{$row->email}"><br>
					<input type="text" name="phone" value="{$row->phone}"><br>
					<input type="password" name="password" placeholder="Lösenord"><br><br>
					<input type="submit" value="Spara" class="btn-default">
				</form>
				<p>Skriv in lösenord och tryck på Spara för ändra</p><hr>
			
END;
		}
		$content .= "<h3>Din orderhistorik</h3>";
		$query = <<<END
			SELECT * FROM order_row
			WHERE userid = '{$_SESSION['userid']}'
END;

		$res = $mysqli->query($query);
		if($res->num_rows > 0)
		{
			while($row = $res->fetch_object())
			{
				$total_price = $row->ItemQTY * $row->cost;
				$content .= "<p>Datum: {$row->created_at}<br>
							Produktkod: {$row->product_code}<br>
							Antal: {$row->ItemQTY}<br>
							Pris st: {$row->cost}<br>
							Totalt pris:  {$total_price}<hr>";
			}
		}

		$content .= "</div>";

	}

	echo $content;
?>