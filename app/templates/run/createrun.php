<?php $this->layout('layoutLog', ['title' => 'Créer une course']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center h1-seekRun">Créer un Run</h1>
	</div>

	<br/>

	<!-- Menu créer une course -->
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<form class="form-horizontal">

					<div class="form-group">
						<label class="inputCreateRun" for="address">Adresse</label>
						<input id="address" name="address" type="text" placeholder="Adresse de départ" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="zipCode">Code postal</label>
						<input id="zipCode" name="zipCode" type="text" placeholder="Code postal" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="city">Ville</label>
						<input id="city" name="city" type="text" placeholder="Ville de départ" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="country">Pays</label>
						<input id="country" name="country" type="text" placeholder="Pays" class="form-control">
					</div>

				</form>
			</div>
		

			<div class="col-md-2"></div>

			<div class="col-md-5">
				<form class="form-horizontal">

					<div class="form-group">
						<label class="inputCreateRun" for="departureDate">Date de départ</label>
						<input id="departureDate" name="departureDate" type="date" placeholder="Date" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="departureDate">Heure de départ</label>
						<input id="departureTime" name="departureTime" type="text" placeholder="Heure" class="form-control">
					</div>

					<div class="form-group">				
						<div id="rngs">
						    <label class="inputCreateRun" for="level">Niveau du run</label>
						    <input type="range" id="levelId" class="rng form-control" min="0" value="0" max="10" step="1">
						    <label class="val">0</label>
						</div>    
					</div>

					<div class="form-group">
						<a type="submit" class="btn btn-danger">Ajouter</a>
					</div>	

				</form>	
			</div>
		</div>
	</div>		
	
						
	<!-- Affichage de la Map et ajouter une course -->
	
	<div class="container">
		<div class="row mapsCreateRun">
			<div class="col-md-12 mapsCreateRun text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d20992.494806491482!2d2.222156289772821!3d48.87609744963252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x47e67ada5b5ac9db%3A0x4e579c1149864c2e!2sBois+de+Boulogne%2C+Paris!3m2!1d48.862440199999995!2d2.2491727!4m5!1s0x47e664e5248c7707%3A0xa682d0ab0702559d!2s134+Avenue+Pablo+Picasso%2C+Nanterre!3m2!1d48.887978499999996!2d2.2247219!5e0!3m2!1sfr!2sfr!4v1455551657149" 
				width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

		<hr class="hr-footer">

	</div> <!-- class="container"> -->
       	

<?php $this->stop('main_content') ?>
