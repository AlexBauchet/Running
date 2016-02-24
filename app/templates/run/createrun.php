<?php $this->layout('layoutLog', ['title' => 'Créer une course']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center">Proposer une course</h1>
	</div>

	<br/>

	<!-- Menu créer une course -->
	<div class="container">

		<form class="form-horizontal">

			<div class="row">

				<div class="col-md-1"></div>

				<div class="col-md-5">
				
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
						<label class="inputCreateRun" for="departureTime">Heure de départ</label>
						<select class="form-control" id="departureTime" name="departureTime"> 
							<option value="0">entre minuit et 1h</option>
							<option value="1">entre 1h et 2h</option>
							<option value="2">entre 2h et 3h</option>
							<option value="3">entre 3h et 4h</option>
							<option value="3">entre 4h et 5h</option>
							<option value="3">entre 5h et 6h</option>
							<option value="3">entre 6h et 7h</option>
							<option value="3" selected>entre 7h et 8h</option>
							<option value="3">entre 8h et 9h</option>
							<option value="3">entre 9h et 10h</option>
							<option value="3">entre 10h et 11h</option>
							<option value="3">entre 11h et 12h</option>
							<option value="3">entre 12h et 13h</option>
							<option value="3">entre 13h et 14h</option>
							<option value="3">entre 14h et 15h</option>
							<option value="3">entre 15h et 16h</option>
							<option value="3">entre 16h et 17h</option>
							<option value="3">entre 17h et 18h</option>
							<option value="3">entre 18h et 19h</option>
							<option value="3">entre 19h et 20h</option>
							<option value="3">entre 20h et 21h</option>
							<option value="3">entre 21h et 22h</option>
							<option value="3">entre 22h et 23h</option>
							<option value="3">entre 23h et minuit</option>
						</select>
					</div>

					<div class="form-group form-group-createrun" id="rngs">				
						<label class="inputCreateRun" for="distance">Distance (du plus court au plus long)</label>
						<div class="levelBar">
							<input class="rng form-control" id="distance" name="distance" type="range" value="2" min="0" max="4" step="1">
							<output class="val" id="outputLevelDistance" for="distance" name="actualLevel"></output>/4
						</div>
					</div>

					<div class="form-group form-group-createrun" id="rgns">		
						<label class="inputCreateRun" for="speed">Vitesse (du plus lent au plus rapide)</label>
						<div class="levelBar">
							<input class="rng form-control" id="speed" name="speed" type="range" value="2" min="0" max="4" step="1">
							<output class="val" id="outputLevelSpeed" for="speed" name="actualLevel"></output>/4
						</div>
					</div>

				</div>

				<div class="col-md-1"></div>

			</div>

			<div class="row mapsCreateRun">
				<div class="col-md-12 mapsCreateRun text-center">
					<p>Ajuster le point de départ</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.421280120741!2d2.2253670160198156!3d48.88830797929036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e664e4cef67dc9%3A0xab3a6e574aaaafbb!2s136+Avenue+Pablo+Picasso%2C+92000+Nanterre!5e0!3m2!1sfr!2sfr!4v1455810481572" 
							width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mapsCreateRun text-center">
					<a type="submit" class="btn btn-danger">Créer la course</a>
				</div>
			</div>

		</form>

	</div>
       	

<?php $this->stop('main_content') ?>
