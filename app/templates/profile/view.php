<?php $this->layout('layoutLog', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center">Profil</h1>
	</div>
	

	<!-- Afficher le profil de l utilisateur -->
	<div class="container">
		<div class="row view">

			<div class="col-md-1">
			
			</div>

			<div class="col-md-4">
			
				<div class="photo-profil">
					<img src="../../../uploads/<?= $profile['profile_picture'] ?>" alt="Photo de profil" width="300" height="200">
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
				<?php if ($w_user['id'] == $profile['user_id']) : ?>
					<a href="<?= $this->url('updateProfile') ?>"><i class="fa fa-edit i-view"></i>Modifier mon profil</a>
				<?php endif; ?>

				<h2>Bonjour, je m'appelle <?=  ucfirst($profile['firstname']) ?> <?= ucfirst($profile['lastname']) ?> !</h2>
				
				
				<h3><?= ucfirst($profile['home_town']) ?>, <?= strtoupper($profile['home_country']) ?> 
				- Membre depuis <?= date('F Y', strtotime($profile['created_at'])) ?></h3>
				
				<p><?= $profile['description'] ?></p>

				<p>Pendant la course, je parle : <?= $blablarun ?></p>			

				<h3>Langues parlées :</h3> <p><?= $profile['language_fr'] ?> <?= $profile['language_en'] ?> <?= $profile['language_es'] ?>
											<?= $profile['language_it'] ?> <?= $profile['language_de'] ?> <?= $profile['language_pt'] ?> </p>


				<h3>Mes exploits :</h3>
				<p>10 km : <?= $profile['time_10km'] ?></p>
				<p>20 km : <?= $profile['time_20km'] ?></p>
				<p>Semi-marathon : <?= $profile['time_half'] ?></p>
				<p>Marathon : <?= $profile['time_marathon'] ?></p>

			<div class="form-group form-group-runProfile TODO">
				<p><strong>TODO :</strong>
					</br>- recuperer le nb de run deja effectues par le membre
					</br>- afficher les 3 prochains runs du membre					
				</p>
			</div>

			</div>

			<div class="col-md-1">
			
			</div>

		</div>
		
	</div>


<?php $this->stop('main_content') ?>
