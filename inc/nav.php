<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <div class="nav">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Hem</a></li>      	
        <li><a href="products.php">Produkter</a></li>
    		<li><a href="guide.php">Färg & stoleks guide</a></li>
    		<li><a href="kontakt.php">Kontakt</a></li>
      
        <?php
          if (isset($_SESSION['userid'])) {
            echo "
            <li><a href='minasidor.php'>Mina sidor</a></li>
            <li><a href='logout.php'>Logout</a></li>
            <p>Inloggad som {$_SESSION['fname']}</p>";
}
else
{
  echo ' <li><a href="login.php">Logga in</a></li>';
}
        ?>
      </ul>      
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
