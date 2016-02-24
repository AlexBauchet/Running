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

				<div class="nbRuns">
					<div>
						<h2>Nombres de runs : </h2>
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
				
				<?php if ($w_user['id'] == $profile['user_id']) : ?>
					<a href="<?= $this->url('updateProfile') ?>">Modifier mon profil</a>
				<?php endif; ?>

				<h3><?= $profile['home_town'] ?>, <?= $profile['home_country'] ?> 
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


<?php $this->stop('main_content') ?>
