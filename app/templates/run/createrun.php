<?php $this->layout('layoutLog', ['title' => 'Créer une course']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center">Créer un Run</h1>
	</div>

	<br/>

	<!-- Menu créer une course -->
	<div class="container">
		<div class="row">

			<div class="col-md-1"></div>

			<div class="col-md-5">
				<form class="form-horizontal">

					<div class="form-group form-group-createrun">
						<label class="inputCreateRun" for="address">Adresse</label>
						<input id="address" name="address" type="text" placeholder="Adresse de départ" class="form-control">
					</div>

					<div class="form-group form-group-createrun">
						<label class="inputCreateRun" for="zipCode">Code postal</label>
						<input id="zipCode" name="zipCode" type="text" placeholder="Code postal" class="form-control">
					</div>

					<div class="form-group form-group-createrun">
						<label class="inputCreateRun" for="city">Ville</label>
						<input id="cityCreate" name="city" type="text" placeholder="Ville de départ" class="form-control">
					</div>

					<div class="form-group form-group-createrun">
						<label class="inputCreateRun" for="country">Pays</label>
						<input id="country" name="country" type="text" placeholder="Pays" class="form-control">
					</div>

				</form>
			</div>
		


			<div class="col-md-5">
				<form class="form-horizontal">

					<div class="form-group form-group-createrun">
						<label class="inputCreateRun" for="departureDate">Date de départ</label>
						<input id="departureDate" name="departureDate" type="date" placeholder="Date" class="form-control">
					</div>

					<div class="form-group form-group-createrun">
						<label class="inputCreateRun" for="departureDate">Heure de départ</label>
						<input id="departureTime" name="departureTime" type="text" placeholder="Heure" class="form-control">
					</div>

					<div class="form-group form-group-createrun">				
						<div id="rngs">
						    <label class="inputCreateRun" for="level">Niveau du run</label>
						    <input type="range" id="levelId" class="rng form-control" min="0" value="0" max="10" step="1">
						    <label class="val">0</label>
						</div>    
					</div>

					<div class="form-group form-group-createrun">
						<a type="submit" class="btn btn-danger">Ajouter</a>
					</div>

				</form>
			</div>

			<div class="col-md-1"></div>

		</div>
	</div>		
	
						
	<!-- Affichage de la Map et ajouter une course -->
	
	<div class="container">
		<div class="row mapsCreateRun">
			<div class="col-md-12 mapsCreateRun text-center">
				<p>Valider le point de départ</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.421280120741!2d2.2253670160198156!3d48.88830797929036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e664e4cef67dc9%3A0xab3a6e574aaaafbb!2s136+Avenue+Pablo+Picasso%2C+92000+Nanterre!5e0!3m2!1sfr!2sfr!4v1455810481572" 
						width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

		<hr class="hr-footer">

	</div> <!-- class="container"> -->
       	

<?php $this->stop('main_content') ?>
