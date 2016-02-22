<?php $this->layout('layoutLog', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center">Profil</h1>
	</div>

	<!-- Afficher le profil de l utilisateur -->
	<div class="container">
		<div class="row">

			<div class="col-md-1">
			
			</div>

			<div class="col-md-4">
			
				<div class="photo-profil">
					<img src="<?= $profile['profile_picture'] ?>" alt="Photo de profil" width="300" height="200">
				</div>

				<div class="verifications">
					<div>
						<h2>Vérifications</h2>
					</div>

					<div>
						<p>Adresse e-mail</p>
						<!-- <p><?php echo $email['email']; ?></p> -->

						<!-- <div class="form-group <?php if(isset($_SESSION['addInfoErrors']['email'])) echo 'has-error'; ?>">
						<label for="email">Adresse e-mail</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php if(isset($_SESSION['lastGameAdded']['gameName'])) echo $_SESSION['lastGameAdded']['gameName']; ?>">
						<?php if(isset($_SESSION['addGameErrors']['gameName'])): ?>
							 <span class="help-block">
							 	<?php echo ($_SESSION['addGameErrors']['gameName']); ?>
							 </span>
						<?php endif; ?>
					</div> -->

						<p>Nombres de runs</p>
						<!-- <p><?php echo $runs['name']; ?></p> -->
					</div>
				</div>

				<div class="langues">
					<div>
						<h2>Mes prochains runs</h2>
					</div>
					<div>
						<p>Insérer PHP</p>
						<p>Insérer PHP</p>
						<p>Insérer PHP</p>
					</div>
				</div>

			</div>

			<div class="col-md-6">

				<h2>Bonjour, je m'appelle <?= $profile['firstname'] ?> !</h2>
				
				<?php if ($w_user['id'] == $profile['id']) : ?>
					<a type="submit" href="<?= $this->url('updateProfile') ?>">Modifier mon profil</a>
				<?php endif; ?>

				<!-- <?php echo $w_user['id'] ?> -->
				<!--<?php echo $profile['id'] ?> renvoie 3-->  

				<h3><?= $profile['home_town'] ?>
				<?= $profile['home_country'] ?> 
				- Membre depuis <?= date('F Y', strtotime($profile['created_at'])) ?></h3>
				
				<p><?= $profile['description'] ?></p>

				<p>Pendant la course, je parle : <?= $blablarun ?></p>

				<h3>Langues parlées :</h3>
				<p><?php foreach ($languages as $language) : ?>
						<?php echo $language ?>
				<?php endforeach; ?></p>

				<h3>Mes exploits :</h3>
				<p>10 km : 'TEMPS_10KM'</p>
				<p>20 km : 'TEMPS_20KM'</p>
				<p>Semi : 'TEMPS_SEMI'</p>
				<p>Marathon : 'TEMPS_MARATHON'</p>

			</div>

			<div class="col-md-1">
			
			</div>

		</div>
	</div>

	
	<div class="container">

		<hr class="hr-footer">

	</div> <!-- class="container"> -->
       	

<?php $this->stop('main_content') ?>
