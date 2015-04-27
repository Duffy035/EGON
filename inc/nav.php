<style>
@media screen and (max-width: 480px) {
    .subnav{
      display: none;
    }

     #big{
      display: none;
    }
}

@media screen and (min-width: 480px) {
    .small{
      display: none;
    }
    
}
</style>





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
        <div class="small">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Armaband<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="50cord.php">5.50 Cord</a></li>
              <li><a href="typecord.php">Type 1 Cord</a></li>
            </ul>
          </li> 
    		  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hund<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="halsband.php">Halsband</a></li>
              <li><a href="koppel.php">Koppel</a></li>
            </ul>
          </li>
        </div> 
        <li id="big"><a href="armband.php">Armband</a></li>
        <li id="big"><a href="hund.php">Hund</a></li>
    		<li><a href="ovrigt.php">Övrigt</a></li>
    		<li><a href="guide.php">Färg & stoleks guide</a></li>
    		<li><a href="kontakt.php">Kontakt</a></li>
        <?php
          if (isset($_SESSION['userid'])) {
            echo "
            <li><a href='#'>Mina sidor</a></li>
            <li><a href='#'>Logout</a>
            Inloggad som {$_SESSION['fname']}";
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
