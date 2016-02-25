<?php $this->layout('layoutLog', ['title' => 'Créer une course']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center">Proposer une course</h1>
	</div>

	<br/>

	<!-- Menu créer une course -->
	<div class="container">

		<form class="form-horizontal" method="POST" action="<?= $this->url('createrunSubmit'); ?>">

			<div class="row">

				<!-- <div class="col-md-1"></div> -->

				<div class="col-md-4">
				
					<div class="form-group form-group-createrun <?php if(isset($errors['address'])) echo 'has-error' ?>">
						<label class="inputCreateRun" for="address">Adresse</label>
						<input id="address" name="address" type="text" placeholder="Adresse de départ" class="form-control">
						<?php if(isset($errors['address'])): ?>
							<span class="help-block"><?= $errors['address']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group form-group-createrun <?php if(isset($errors['city'])) echo 'has-error' ?>">
						<label class="inputCreateRun" for="city">Ville</label>
						<input id="cityCreate" name="city" type="text" placeholder="Ville de départ" class="form-control">
						<?php if(isset($errors['city'])): ?>
							<span class="help-block"><?= $errors['city']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group form-group-createrun <?php if(isset($errors['country'])) echo 'has-error' ?>">
						<label class="inputCreateRun" for="country">Pays</label>
						<input id="country" name="country" type="text" placeholder="Pays" class="form-control">
						<?php if(isset($errors['country'])): ?>
							<span class="help-block"><?= $errors['country']; ?></span>
						<?php endif; ?>
					</div>

				</div>

				<div class="col-md-4">

					<div class="form-group form-group-createrun <?php if(isset($errors['runName'])) echo 'has-error' ?>">
						<label class="inputCreateRun" for="runName">Nom de la course</label>
						<input id="runName" name="runName" type="text" placeholder="Nom de la course" class="form-control">
						<?php if(isset($errors['runName'])): ?>
							<span class="help-block"><?= $errors['runName']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group form-group-createrun <?php if(isset($errors['departureDate'])) echo 'has-error' ?>">
						<label class="inputCreateRun" for="departureDate">Date de départ</label>
						<input id="departureDate" name="departureDate" type="date" placeholder="Date" class="form-control">
						<?php if(isset($errors['departureDate'])): ?>
							<span class="help-block"><?= $errors['departureDate']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group form-group-createrun <?php if(isset($errors['departureTime'])) echo 'has-error' ?>">
						<label class="inputCreateRun" for="departureTime">Heure de départ</label>
						<select class="form-control" id="departureTime" name="departureTime"> 
							<option value="0" selected>sélectionner une tranche horaire</option>
							<option value="1">entre minuit et 1h</option>
							<option value="2">entre 1h et 2h</option>
							<option value="3">entre 2h et 3h</option>
							<option value="4">entre 3h et 4h</option>
							<option value="5">entre 4h et 5h</option>
							<option value="6">entre 5h et 6h</option>
							<option value="7">entre 6h et 7h</option>
							<option value="8">entre 7h et 8h</option>
							<option value="9">entre 8h et 9h</option>
							<option value="10">entre 9h et 10h</option>
							<option value="11">entre 10h et 11h</option>
							<option value="12">entre 11h et 12h</option>
							<option value="13">entre 12h et 13h</option>
							<option value="14">entre 13h et 14h</option>
							<option value="15">entre 14h et 15h</option>
							<option value="16">entre 15h et 16h</option>
							<option value="17">entre 16h et 17h</option>
							<option value="18">entre 17h et 18h</option>
							<option value="19">entre 18h et 19h</option>
							<option value="20">entre 19h et 20h</option>
							<option value="21">entre 20h et 21h</option>
							<option value="22">entre 21h et 22h</option>
							<option value="23">entre 22h et 23h</option>
							<option value="24">entre 23h et minuit</option>
						</select>
						<?php if(isset($errors['departureTime'])): ?>
							<span class="help-block"><?= $errors['departureTime']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group form-group-runProfile TODO">
						<p><strong>TODO :</strong>
							</br>- Positionner point de depart sur la Map
						</p>
					</div>


				</div>

				<div class="col-md-4">
	
					<div class="form-group form-group-createrun <?php if(isset($errors['distance'])) echo 'has-error' ?>" id="rngs">				
						<label class="inputCreateRun" for="distance">Distance</label>
						<div class="levelBar">
							<input class="rng form-control" id="distance" name="distance" type="range" value="0" min="0" max="42" step="1">
							<output class="val" id="outputLevelDistance" for="distance" name="actualLevel"></output>km
						</div>
						<?php if(isset($errors['distance'])): ?>
							<span class="help-block"><?= $errors['distance']; ?></span>
						<?php endif; ?>						
					</div>

					<div class="form-group form-group-createrun <?php if(isset($errors['speed'])) echo 'has-error' ?>" id="rgns">		
						<label class="inputCreateRun" for="speed">Vitesse</label>
						<div class="levelBar">
							<input class="rng form-control" id="speed" name="speed" type="range" value="0" min="0" max="15" step="0.5">
							<output class="val" id="outputLevelSpeed" for="speed" name="actualLevel"></output>min/km
						</div>
						<?php if(isset($errors['speed'])): ?>
							<span class="help-block"><?= $errors['speed']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group form-group-createrun">
						<label class="inputCreateRun" for="runDescription">Description du parcours</label>
						<textarea id="runDescription" name="runDescription" type="text" placeholder="Description" class="form-control"></textarea>
					</div>

				</div>


				<!-- <div class="col-md-1"></div> -->

			</div>

			<div class="row mapsCreateRun">
				<div class="col-md-8 col-md-offset-2 mapsCreateRun text-center">
					<p>Visualiser le point de départ</p>
					
					<!-- GEOLOCALISATION -->
					<div id="map"></div>

					<div id="info"></div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mapsCreateRun text-center">
					<button type="submit" class="btn btn-danger">Créer la course</button>
				</div>
			</div>

		</form>

	</div>
       	

<?php $this->stop('main_content') ?>
