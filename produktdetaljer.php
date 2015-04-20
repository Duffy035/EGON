<?php include'inc/head.php';?>
<?php include'inc/template.php'; ?>
<?php include'inc/nav.php'; ?> 
<div class="container">
	<div class="content">
		<div class="row" id="produktinfo">
  			<div class="col-xs-4">Produktnamn</div>
  			<div class="col-xs-6">Pis:-</div>
			
			<div class="col-xs-4"> 
				<div class="images">
					<a href="img/img1.png" data-lightbox="Bilder" data-title="Falken dominerar."><img src="img/img1small.jpg"></a>
					<a href="img/img2.jpg" data-lightbox="Bilder" data-title="Pelle Jönsson"><img src="img/img2small.jpg"></a>
					<a href="img/img3.jpg" data-lightbox="Bilder" data-title="Vetenskapen påvisar: Ungdomar är sjukt biffiga nu för tiden"><img src="img/img3small.jpg"></a>
					<a href="img/img4.png" data-lightbox="Bilder" data-title="Ny SM-mästare: Malin Skoghag"><img src="img/img4small.jpg"></a>
						<!-- för att lägga till nya bilder, gör en ny rad som dessa ovan, byt a href till den stora bilden, och img src till tumnageln-->
				</div>
				<p>Här kommer lite info om produkten</p>
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-2 col-md-offset-6">
			<p>Färg 1</p>
				<select class="form-control">
  					<option>Svart</option>
  					<option>Grön</option>
  					<option>Orange</option>
  					<option>Röd</option>
  					<option>Blå</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Färg 2</p>
				<select class="form-control">
  					<option>Svart</option>
  					<option>Grön</option>
  					<option>Orange</option>
  					<option>Röd</option>
  					<option>Blå</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Storlek cm</p>
				<select class="form-control">
  					<option>15</option>
  					<option>16</option>
  					<option>17</option>
  					<option>18</option>
  					<option>19</option>
  					<option>20</option>
  					<option>21</option>
  					<option>22</option>
  					<option>23</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-offset-6">
			<p>Spänne</p>
				<select class="form-control">
  					<option>Knut</option>
  					<option>Plast</option>
  					<option>Metall</option>
				</select>
			</div>
		</div>
	</div>
</div>

</body>
</html>