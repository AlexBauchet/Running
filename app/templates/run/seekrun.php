<?php $this->layout('layoutLog', ['title' => 'Trouver une course']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center">Trouver une course</h1>
	</div>

	<!-- Menu trouver une course -->
	<div class="container containerSeekRun">
		<div class="row formSeekRun">
			<form class="form-inline">

				<div class="form-group">	
					<i class="fa fa-map fa-2x"></i>
				</div>	

				<div class="form-group divSeekRun">
					<!-- <label for="city" hidden></label> -->
					<!-- <span class="input-group-addon"><i class="fa fa-map-o fa-fw"></i></span> -->
					<input id="citySeek" name="city" type="text" placeholder="Ville de départ" class="form-control inputFieldSeekRun">
				</div>

				<div class="form-group">
					<i class="fa fa-calendar fa-2x"></i>
				</div>

				<div class="form-group divSeekRun">
					<input id="departureDate" name="departureDate" type="date" placeholder="Date" class="form-control inputFieldSeekRun">
				</div>

				<div class="form-group">
					<i class="fa fa-clock-o fa-2x"></i> 
				</div>

				<div class="form-group divSeekRun">

					<input id="departureTime" name="departureTime" type="text" placeholder="Heure" class="form-control inputFieldSeekRun">
				</div>

				<div class="form-group">
					<i class="fa fa-venus-mars fa-2x"></i>
				</div>

				<div class="form-group divSeekRun">
					<select class="form-control" id="gender" name="gender"> 
						<option value="" disabled selected>Runners</option>
						<option value="0">N'importe</option>
						<option value="1">Homme</option>
						<option value="2">Femme</option>
					</select>
				</div>

			</form>
		</div>
	</div>

	<div class="container text-center" id="btnChercherSeekRun">
		<div class="form-group">
			<a type="submit" class="btn btn-danger">Chercher</a>
		</div>
	</div>


	<!-- Affichage de la Map et ajouter une course -->
	<div class="container">
		<div class="row mapsSeekRun">
			<div class="col-md-12 mapsSekkRunMargin">
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d20992.494806491482!2d2.222156289772821!3d48.87609744963252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x47e67ada5b5ac9db%3A0x4e579c1149864c2e!2sBois+de+Boulogne%2C+Paris!3m2!1d48.862440199999995!2d2.2491727!4m5!1s0x47e664e5248c7707%3A0xa682d0ab0702559d!2s134+Avenue+Pablo+Picasso%2C+Nanterre!3m2!1d48.887978499999996!2d2.2247219!5e0!3m2!1sfr!2sfr!4v1455551657149" 
						width="900" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row" id="addRunButton">
			<p><a class="btn btn-info btn-lg" href="<?= $this->url('createrun') ?>" role="button">
				<i class="fa fa-fw fa-lg fa-plus-square-o"></i>Ajouter une course</a>
			</p>
		</div> 
	<!-- Ne pas fermer la </div class='container'> ici.. Se ferme après le footer --> 


		<!-- NE PAS TOUCHER -->
		<hr class="hr-footer">


	</div> <!-- /container -->        


<?php $this->stop('main_content') ?>
