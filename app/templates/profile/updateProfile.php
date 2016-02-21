<?php $this->layout('layoutLog', ['title' => 'Update Profile']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center">Modifier mon Profil</h1>
	</div>

	<!-- Afficher le profil de l utilisateur -->
	<div class="container">
		<div class="row">

			<div class="col-md-1">
			
			</div>

			<div class="col-md-4">

				<div class="form-group">
					<label class="inputCreateRun" for="address">Charger une nouvelle photo de profil</label>
					<input id="address" name="address" type="text" placeholder="Importer une photo" class="form-control">
				</div>

				<div class="form-group">
					<label class="inputCreateRun" for="firstname">Prénom</label>
					<input id="firstname" name="firstname" type="text" placeholder="Prenom" value="<?php if(isset($profile['firstname'])) echo $profile['firstname'] ?>" class="form-control">
				</div>

				<div class="form-group">
					<label class="inputCreateRun" for="lastname">Nom</label>
					<input id="lastname" name="lastname" type="text" placeholder="Nom" value="<?php if(isset($profile['lastname'])) echo $profile['lastname'] ?>" class="form-control">
				</div>

				<div class="form-group">
					<label class="inputCreateRun" for="email">Email</label>
					<input id="email" name="email" type="text" placeholder="exemple@abc.com" value="<?php if(isset($profile['email'])) echo $profile['email'] ?>" class="form-control">
				</div>

				<div class="form-group">
					<label class="inputCreateRun" for="homeTown">Ville de résidence</label>
					<input id="homeTown" name="homeTown" type="text" placeholder="Ville de résidence" value="<?php if(isset($profile['home_town'])) echo $profile['home_town'] ?>" class="form-control">
				</div>

				<div class="form-group">
					<label class="inputCreateRun" for="homeCountry">Pays de résidence</label>
					<input id="homeCountry" name="homeCountry" type="text" placeholder="Pays de résidence" value="<?php if(isset($profile['home_country'])) echo $profile['home_country'] ?>" class="form-control">
				</div>

			</div>

			<div class="col-md-6">

				<div class="form-group">
					<h2>Pendant la course, je parle : </h2>
					<label class="inputCreateRun" hidden></label>
					<input class="blablarun" name="blablarun" type="radio" value="0" class="form-control">pas du tout
					<input class="blablarun" name="blablarun" type="radio" value="1" class="form-control">un peu
					<input class="blablarun" name="blablarun" type="radio" value="2" class="form-control">beaucoup
				</div>

				<div class="form-group">
					<h2>Langues parlées : </h2>
					<label class="inputCreateRun" hidden</label>
					<input class="blablarun" name="langues" type="checkbox" value="fr" class="form-control">français
					<input class="blablarun" name="langues" type="checkbox" value="en" class="form-control">anglais
					<input class="blablarun" name="langues" type="checkbox" value="it" class="form-control">italien
					<input class="blablarun" name="langues" type="checkbox" value="es" class="form-control">espagnol
					<input class="blablarun" name="langues" type="checkbox" value="de" class="form-control">allemand
				</div>

				<div class="form-group">
					<h2>Mes exploits sur : </h2>

					<p>10 km : </p>
					<form>
						<select name="time_10km" size="1">
							<option>-35min
							<option>entre 35 et 40min
							<option>entre 40 et 50min
							<option>entre 50min et 1 h
							<option>entre 1h et 1h10 min
							<option>entre 1h10 et 1h20 min
							<option>+1h20 min
						</select>
					</form>	

					<p>20 km : </p>
					<form>
						<select name="time_20km" size="1">
							<option>-1h30</option>
							<option>entre 1h30 et 1h40</option>
							<option>entre 1h40 et 1h50</option>
							<option>entre 1h50 et 2h00</option>
							<option>entre 2h00 et 2h10</option>
							<option>entre 2h10 et 2h20</option>
							<option>entre 2h20 et 2h30</option>	
							<option>+2h30 min</option>
						</select>
					</form>	
					
					<p>Semi : </p>
					<form>
						<select name="time_semi" size="1">
							<option>-1h30
							<option>entre 1h30 et 1h40
							<option>entre 1h40 et 1h50
							<option>entre 1h50 et 2h00
							<option>entre 2h00 et 2h10
							<option>entre 2h10 et 2h20
							<option>entre 2h20 et 2h30	
							<option>+2h30 min
						</select>
					</form>	
					
					<p>Marathon : </p>
					<form>
						<select name="time_marathon" size="1">
							<option>-3h00
							<option>entre 3h00 et 3h20
							<option>entre 3h20 et 3h40
							<option>entre 3h40 et 4h00
							<option>entre 4h20 et 4h00
							<option>entre 2h10 et 2h20
							<option>entre 2h20 et 2h30	
							<option>+2h30 min
						</select>
					</form>	

				</div>
			</div>


			<div class="col-md-1">
			
			</div>

		</div>
	</div>

	
	<div class="container">

		<hr class="hr-footer">

	</div> <!-- class="container"> -->
       	

<?php $this->stop('main_content') ?>
