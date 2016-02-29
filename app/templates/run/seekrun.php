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
					<!-- <input id="departureTime" name="departureTime" type="text" placeholder="Heure" class="form-control inputFieldSeekRun"> -->
						<select class="form-control" id="departureTime" name="departureTime"> 
							<option value="0">Toute la journée</option>
							<option value="1">avant 6h</option>
							<option value="2">entre 6h et 8h</option>
							<option value="3">entre 8h et 10h</option>
							<option value="4">entre 10h et midi</option>
							<option value="5">entre midi et 14h</option>
							<option value="6">entre 14h et 16h</option>
							<option value="6">entre 16h et 18h</option>
							<option value="6">entre 18h et 20h</option>
							<option value="6">après 20h</option>
						</select>
				</div>

				<div class="form-group">
					<i class="fa fa-venus-mars fa-2x"></i>
				</div>

				<div class="form-group divSeekRun">
					<select class="form-control" id="gender" name="gender"> 
						<option value="" disabled selected>Organisateur</option>
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
			<a type="submit" class="btn btn-danger">Chercher les courses correspondantes</a>
		</div>
	</div>

	<div class="form-group form-group-runProfile TODO">
		<p><strong>TODO :</strong>
			</br>- Centrer la carte par defaut sur la location du user
		</p>
	</div>


	<!-- Affichage de la Map et ajouter une course -->
	<div class="container">
		<div class="row mapsSeekRun">
			<div class="col-md-12 mapsSeekRunMargin">
					
				<!-- GEOLOCALISATION -->
				<div id="mapSeekRun"></div>

				<div id="info"></div>

			</div>
		</div>

		<div class="row" id="addRunButton">
			<p><a class="btn btn-primary" href="<?= $this->url('createrun') ?>" role="button">
				<i class="fa fa-fw fa-lg fa-plus-square-o"></i>Proposer une course</a>
			</p>
		</div> 

	</div>    

	<!-- script permettant de generer la google maps avec les markers de courses -->
	<script type="text/javascript">

		var map;

		function initMap() {

			map = new google.maps.Map(document.getElementById('mapSeekRun'), {
				center: {lat: 48.856614, lng: 2.352222},
				zoom: 12
			});

			<?php foreach($allRuns as $run): ?>

				var messageInfoWindow<?= $run['id'] ?> = "<h2 id='h2-infoWindow'><a href='<?= $this->url('runProfile', ['id' => $run['id']]) ?>'><?= $run['run_name'] ?></a></h2>" + 
														 "<p class='p-infoWindow'><i class='fa fa-arrows-h fa-1x i-infoWindow'></i><?= $run['distance'] ?> km</p>" +
														 "<p class='p-infoWindow'><i class='fa fa-flash fa-1x i-infoWindow'></i><?= $run['speed'] ?> min/km</p>";

				var infoWindow<?= $run['id'] ?> = new google.maps.InfoWindow({
					content: messageInfoWindow<?= $run['id'] ?>
				});

				var myLatLng<?= $run['id'] ?> = {lat: <?= $run['latitude'] ?>, lng: <?= $run['longitude'] ?>};

				var marker<?= $run['id'] ?> = new google.maps.Marker({
					position: myLatLng<?= $run['id'] ?>,
					map: map,
					title: "<?= $run['run_name'] ?>"
				});

				marker<?= $run['id'] ?>.addListener('mouseover', function() {
					// ouverture au click d une infobulle contenant les details du run
					infoWindow<?= $run['id'] ?>.open(map, marker<?= $run['id'] ?>);
				});

				marker<?= $run['id'] ?>.addListener('click', function() {
					// redirection en JS vers la page de detail de la course 
					window.location.href="<?= $this->url('runProfile', ['id' => $run['id']]) ?>";
				});

			<?php endforeach; ?>
		}

		// function attachMessage(marker, messageInfoWindow) {
		// 	var infowindow = new google.maps.InfoWindow({
		// 		content: messageInfoWindow
		// 	});

		// 	marker.addListener('click', function() {
		// 		infowindow.open(marker.get('map'), marker);
		// 	});
		// }

	</script>


<?php $this->stop('main_content') ?>
