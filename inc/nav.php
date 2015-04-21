<style>
@media screen and (max-width: 480px) {
    .subnav{
      display: none;
    }

     .big{
      display: none;
    }
}

@media screen and (min-width: 480px) {
    .small{
      display: none;
    }
    .big{
      display: inline-block;
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
        <div class="big">
      	<li><a href="armband.php">Armband</a></li>
        </div>
        <div class="small">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Armaband<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">5.50 Cord</a></li>
              <li><a href="#">Type 1 Cord</a></li>
            </ul>
          </li>
        </div>
        <div class="big"> 
    		<li><a href="hund.php">Hund</a></li>
        </div>
        <div class="small">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hund<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Halsband</a></li>
              <li><a href="#">Koppel</a></li>
            </ul>
          </li>
        </div>  
    		<li><a href="ovrigt.php">Övrigt</a></li>
    		<li><a href="guide.php">Färg & stoleks guide</a></li>
    		<li><a href="kontakt.php">Kontakt</a></li>
      </ul>      
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
