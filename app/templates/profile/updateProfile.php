<?php $this->layout('layoutLog', ['title' => 'Update Profile']) ?>

<?php $this->start('main_content') ?>

<!-- MAIN CONTENT -->
<div class="container">
	<h1 class="text-center">Modifier mon profil</h1>
</div>

<?php debug($profile['language']); ?>

<!-- Afficher le profil de l utilisateur -->
<div class="container">

	 <form method="POST" enctype="multipart/form-data" action="<?= $this->url('updateProfileSubmit'); ?>">

		<div class="row">

			<div class="col-md-1"></div>

			<div class="col-md-5">
				<div class="form-group form-group-updateProfile">
					<label class="inputCreateRun" for="profile_picture">Charger une nouvelle photo de profil</label>
					<input id="profile_picture" name="profile_picture" type="file" placeholder="Importer une photo" class="form-control">
				</div>				

				<div class="form-group form-group-updateProfile">
					<label class="inputCreateRun" for="lastname">Nom</label>
					<input id="lastname" name="lastname" type="text" placeholder="Nom" value="<?php if(isset($profile['lastname'])) echo $profile['lastname'] ?>" class="form-control">
				</div>

				<div class="form-group form-group-updateProfile">
					<label class="inputCreateRun" for="firstname">Prénom</label>
					<input id="firstname" name="firstname" type="text" placeholder="Prenom" value="<?php if(isset($profile['firstname'])) echo $profile['firstname'] ?>" class="form-control">
				</div>
					
				<div class="form-group form-group-updateProfile">
					<p>Je suis : </p>					
					<select class="form-control selectGender" name="gender">					
						<option value="" <?php if($profile['gender'] == '') {echo 'selected' ; } ?> >Sélectionner un genre</option>
						<option value="0" <?php if($profile['gender'] == '0') {echo 'selected' ; } ?> >Un homme</option>					
						<option value="1" <?php if($profile['gender'] == '1') {echo 'selected' ; } ?> >Une femme</option>
					</select>
				</div>

				<div class="form-group form-group-updateProfile">
					<label class="inputCreateRun" for="home_town">Ville de résidence</label>
					<input id="home_town" name="home_town" type="text" placeholder="Ville de résidence" value="<?php if(isset($profile['home_town'])) echo $profile['home_town'] ?>" class="form-control">
				</div>

				<div class="form-group form-group-updateProfile">
					<label class="inputCreateRun" for="home_country">Pays de résidence</label>
					<input id="home_country" name="home_country" type="text" placeholder="Pays de résidence" value="<?php if(isset($profile['home_country'])) echo $profile['home_country'] ?>" class="form-control">
				</div>

			</div>

			<div class="col-md-5">

				<div class="form-group form-group-updateProfile">
					<label class="inputCreateRun" for="description">Description</label>
					<textarea id="description" name="description" type="text" placeholder="Description" class="form-control"><?php if(isset($profile['description'])) echo $profile['description'] ?></textarea>
				</div>

				<div class="form-group">
					<h3>Pendant la course, je parle : </h3>
					<label class="inputCreateRun" hidden></label>
					<div>
						<li class="btnRadioBlablarun"><input name="blablarun" id="blablarun" type="radio" value="0" <?php if($profile['blablarun'] == '0') {echo 'checked' ; } ?> > pas du tout</li>
						<li class="btnRadioBlablarun"><input name="blablarun" id="blablarun" type="radio" value="1" <?php if($profile['blablarun'] == '1') {echo 'checked' ; } ?>> un peu</li>
						<li class="btnRadioBlablarun"><input name="blablarun" id="blablarun" type="radio" value="2" <?php if($profile['blablarun'] == '2') {echo 'checked' ; } ?>> beaucoup</li>
					</div>
				</div>

				<div class="form-group">
					<h3>Langues parlées : </h3>
					<label class="inputCreateRun" hidden> </label>

					<div id="drapeaux">
							<li class="checkboxLanguages">
								<input class="languages" name="language" type="checkbox" value="fr" class="form-control" <?php if($profile['language'] == 'fr') {echo 'checked' ; } ?> >
								<img src="../assets/img/france.png" alt="drapeau francais">
							</li>
							<li class="checkboxLanguages">
								<input class="languages" name="language" type="checkbox" value="en" class="form-control" <?php if($profile['language'] == 'en') {echo 'checked' ; } ?> >
								<img src="../assets/img/uk.png" alt="drapeau anglais">
							</li>
							<li class="checkboxLanguages">
								<input class="languages" name="language" type="checkbox" value="it" class="form-control" <?php if($profile['language'] == 'it') {echo 'checked' ; } ?> >
								<img src="../assets/img/italie.png" alt="drapeau italien">
							</li>									
							<li class="checkboxLanguages">
								<input class="languages" name="language" type="checkbox" value="es" class="form-control" <?php if($profile['language'] == 'es') {echo 'checked' ; } ?> >
								<img src="../assets/img/espagne.png" alt="drapeau espagnol">
							</li>
							<li class="checkboxLanguages">
								<input class="languages" name="language" type="checkbox" value="de" class="form-control" <?php if($profile['language'] == 'de') {echo 'checked' ; } ?> >
								<img src="../assets/img/allemagne.png" alt="drapeau allemand">
							</li>
							<li class="checkboxLanguages">
								<input class="languages" name="language" type="checkbox" value="pt" class="form-control" <?php if($profile['language'] == 'pt') {echo 'checked' ; } ?> >
								<img src="../assets/img/portugal.png" alt="drapeau portugais">
							</li>
					</div>
				</div>

					<div class="form-group">
						<h3>Mes exploits : </h3>
						<div class="distancesOfficielles">
							<p>10 km : </p>
							<select class="selectDistance" name="time_10km" size="1">
								<option value="0" <?php if($profile['time_10km'] == '0') {echo 'selected' ; } ?> >Pas de temps</option>
								<option value="1" <?php if($profile['time_10km'] == '1') {echo 'selected' ; } ?> >-35min</option>
								<option value="2" <?php if($profile['time_10km'] == '2') {echo 'selected' ; } ?> >entre 35 et 40min</option>
								<option value="3" <?php if($profile['time_10km'] == '3') {echo 'selected' ; } ?> >entre 40 et 50min</option>
								<option value="4" <?php if($profile['time_10km'] == '4') {echo 'selected' ; } ?> >entre 50min et 1 h</option>
								<option value="5" <?php if($profile['time_10km'] == '5') {echo 'selected' ; } ?> >entre 1h et 1h10 min</option>
								<option value="6" <?php if($profile['time_10km'] == '6') {echo 'selected' ; } ?> >entre 1h10 et 1h20 min</option>
								<option value="7" <?php if($profile['time_10km'] == '7') {echo 'selected' ; } ?> >+1h20 min</option>
							</select>
						</div>	

						<div class="distancesOfficielles">
							<p>20 km : </p>
							<select class="selectDistance" name="time_20km" size="1">
								<option value="0" <?php if($profile['time_20km'] == '0') {echo 'selected' ; } ?> >Pas de temps</option>
								<option value="1" <?php if($profile['time_20km'] == '1') {echo 'selected' ; } ?> >-1h30</option>
								<option value="2" <?php if($profile['time_20km'] == '2') {echo 'selected' ; } ?> >entre 1h30 et 1h40</option>
								<option value="3" <?php if($profile['time_20km'] == '3') {echo 'selected' ; } ?> >entre 1h40 et 1h50</option>
								<option value="4" <?php if($profile['time_20km'] == '4') {echo 'selected' ; } ?> >entre 1h50 et 2h00</option>
								<option value="5" <?php if($profile['time_20km'] == '5') {echo 'selected' ; } ?> >entre 2h00 et 2h10</option>
								<option value="6" <?php if($profile['time_20km'] == '6') {echo 'selected' ; } ?> >entre 2h10 et 2h20</option>
								<option value="7" <?php if($profile['time_20km'] == '7') {echo 'selected' ; } ?> >entre 2h20 et 2h30</option>	
								<option value="8" <?php if($profile['time_20km'] == '8') {echo 'selected' ; } ?> >+2h30 min</option>
							</select>
						</div>	

						<div class="distancesOfficielles">
							<p>Semi-marathon : </p>
							<select class="selectDistance" name="time_half" size="1">
								<option value="0" <?php if($profile['time_half'] == '0') {echo 'selected' ; } ?> >Pas de temps</option>
								<option value="1" <?php if($profile['time_half'] == '1') {echo 'selected' ; } ?> >-1h30</option>
								<option value="2" <?php if($profile['time_half'] == '2') {echo 'selected' ; } ?> >entre 1h30 et 1h40</option>
								<option value="3" <?php if($profile['time_half'] == '3') {echo 'selected' ; } ?> >entre 1h40 et 1h50</option>
								<option value="4" <?php if($profile['time_half'] == '4') {echo 'selected' ; } ?> >entre 1h50 et 2h00</option>
								<option value="5" <?php if($profile['time_half'] == '5') {echo 'selected' ; } ?> >entre 2h00 et 2h10</option>
								<option value="6" <?php if($profile['time_half'] == '6') {echo 'selected' ; } ?> >entre 2h10 et 2h20</option>
								<option value="7" <?php if($profile['time_half'] == '7') {echo 'selected' ; } ?> >entre 2h20 et 2h30</option>
								<option value="8" <?php if($profile['time_half'] == '8') {echo 'selected' ; } ?> >+2h30 min</option>
							</select>
						</div>	

						<div class="distancesOfficielles">
							<p>Marathon : </p>
							<select class="selectDistance" name="time_marathon" size="1">
								<option value="0" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >Pas de temps</option>
								<option value="1" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >-3h00</option>
								<option value="2" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >entre 3h00 et 3h20</option>
								<option value="3" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >entre 3h20 et 3h40</option>
								<option value="4" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >entre 3h40 et 4h00</option>
								<option value="5" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >entre 4h20 et 4h40</option>
								<option value="6" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >entre 4h40 et 5h00</option>
								<option value="7" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >entre 5h00 et 5h20</option>
								<option value="8" <?php if($profile['time_marathon'] == '0') {echo 'selected' ; } ?> >+5h20</option>
							</select>
						</div>

						<div class="form-group form-group-runProfile TODO">
							<p><strong>TODO :</strong>
								</br>- photo de profil s efface si on met a jour le profil sans charger une nouvelle photo								
								</br>- enregistrer toutes les langues selectionnees en bdd (seulement un choix est sauvegardé pour le moment)
							</p>
						</div>

					</div>

			</div>

				<div class="col-md-1">

				</div>

		</div>

		<div class="row">

			<div class="col-md-1"></div>

			<div class="col-md-10">
				<div class="form-group text-center">
					<button type="submit" class="btn btn-danger btnUpdateProfile">Enregistrer les modifications</a>
				</div>
			</div>

			<div class="col-md-1"></div>

		</div>

	</form>

</div>

<?php $this->stop('main_content') ?>
