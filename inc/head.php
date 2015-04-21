<?php
				$navigation = <<<END
				<nav>
					<a href="login.php">Test</a>
				</nav>
END;
			if(isset($_SESSION['userid'])) {
				$navigation .= <<<END
				<a href="#">Logout</a>
				Inloggad som {$_SESSION['userid']}
END;
			}else{
				$navigation .= '<a href="login.php">Logga in</a>';
			}
			$navigation .= '</nav>';
			
			?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
	<div class="head">
		<img id="logga" src="img/loggaguul.png">
			<div id="banner">
				<p> Paracord Fashion</p>
			</div>
			<div id="login"> 
				<?php
					echo $navigation;
					
				?>
			</div>
	</div>
</div>