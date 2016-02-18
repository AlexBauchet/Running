<?php $this->layout('layoutLog', ['title' => 'Créer une course']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center h1-seekRun">Créer une course</h1>
	</div>

	<!-- Menu créer une course -->
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form>

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

					<div class="form-group">
						<label class="inputCreateRun" for="departureDate">Date de départ</label>
						<input id="departureDate" name="departureDate" type="date" placeholder="Date" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="departureDate">Heure de départ</label>
						<input id="departureTime" name="departureTime" type="text" placeholder="Heure" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="runLevel">Niveau du run</label>
						<input id="runLevel" name="runLevel" type="text" placeholder="Niveau" class="form-control">
					</div>

					<div class="form-group">				
						<div id="rngs">
						    <label class="inputCreateRun" for="level">Niveau de la course</label>
						    <input type="range" id="levelId" class="rng form-control" min="0" value="0" max="10" step="1">
						    <label class="val">0</label>
						</div>    
					</div>

					<a type="submit" class="btn btn-danger">Ajouter</a>

				</form>
			</div>
		</div>
	</div>


	<!-- Affichage de la Map et ajouter une course -->
	
	<div class="container">

		<!-- affichage de la map -->
		<p>GOOGLE MAP</p>


		<hr class="hr-footer">

	</div> <!-- class="container"> -->
       	

<?php $this->stop('main_content') ?>
