<?php $this->layout('layoutLog', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center h1-seekRun">Profil</h1>
	</div>

	<!-- Afficher le profil de l utilisateur -->
	<div class="container">
		<div class="row">

			<div class="col-md-1">
			
			</div>

			<div class="col-md-4">
			
				<div class="photo-profil">
					<h2>Photo de profil</h2>
				</div>

				<div class="verifications">
					<div>
						<h2>Vérifications</h2>
					</div>
					<div>
						<p>Adresse e-mail</p>
						<p>Insérer PHP</p>

						<p>Nombres de runs</p>
						<p>Insérer PHP</p>
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

				<h2>Bonjour, je m'appelle 'PRENOM DU MEMBRE' !</h2>
				<a type="submit" href="updateProfil.php">Modifier mon profil</a>

				<h3>'VLLE DU MEMBRE', 'PAYS DU MEMBRE' - Membre depuis 'CREATED_AT(MOIS ANNEE)'!</h3>
				
				<p>'DESCRIPTION DU MEMBRE'</p>

				<p>Pendant la course, je parle : 'BLABLARUN DU MEMBRE'</p>

				<h3>Langues parlées :</h3>
				<p>'LANGUE_1'</p>
				<p>'LANGUE_2'</p>
				<p>'LANGUE_3'</p>

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


	<!-- Affichage de la Map et ajouter une course -->
	
	<div class="container">

		<!-- affichage de la map -->
		<p>GOOGLE MAP</p>


		<hr class="hr-footer">

	</div> <!-- class="container"> -->
       	

<?php $this->stop('main_content') ?>
