<?php $this->layout('layoutLog', ['title' => 'Détail de la course']) ?>

<?php $this->start('main_content') ?>

	<!-- MAIN CONTENT -->
	<div class="container text-center">
		<h1 class="text-center"><?= $run['run_name'] ?></h1>
		<h3>Organisée par <a href="<?= $this->url('viewProfile', ['id' => $run['profile_id']]) ?>"><?= $run['firstname'] ?></a></h3>
	</div>

	<br/>

	<!-- Menu créer une course -->
	<div class="container">

			<div class="row runProfile">

				<div class="col-md-1"></div>

				<div class="col-md-5">

					<div class="mapRunProfileMargin">
						
						<!-- GEOLOCALISATION -->
						<div id="mapRunProfile"></div>

						<div id="info"></div>
					
					</div>

				</div>

				<div class="col-md-5">

					<div class="form-group form-group-runProfile">
						<i class="fa fa-map-marker fa-1x i-RunProfile"></i>
						<p><?= $run['address'] ?>, <?= $run['city'] ?>, <?= $run['country'] ?></p>
					</div>

					<div class="form-group form-group-runProfile">
						<i class="fa fa-calendar fa-1x i-RunProfile"></i>
						<p><?= date('d F Y', strtotime($run['departure_date'])) ?></p>
					</div>

					<div class="form-group form-group-runProfile">
						<i class="fa fa-clock-o fa-1x i-RunProfile"></i>
						<p><?= $run['departure_time'] ?></p>
					</div>

					<div class="form-group form-group-runProfile">
						<i class="fa fa-arrows-h fa-1x i-RunProfile"></i>
						<p><?= $run['distance'] ?> km</p>
					</div>

					<div class="form-group form-group-runProfile">
						<i class="fa fa-flash fa-1x i-RunProfile"></i>
						<p><?= $run['speed'] ?> min/km</p>
					</div>

					<div class="form-group form-group-runProfile">
						<i class="fa fa-info fa-1x i-RunProfile"></i>
						<p><?= $run['description'] ?></p>
					</div>

					<div class="form-group form-group-runProfile">
						<i class="fa fa-users fa-1x i-RunProfile"></i>
						<p>Autres participants : <?= $run['description'] ?></p>
					</div>

					<div class="form-group form-group-runProfile">
						<a href="<?= $this->url('joinRun', ['id' => $run['id']]); ?>" class="btn btn-danger"><i class="fa fa-user-plus fa-1x"></i>Participer à la course</a>
					</div>

					<div class="form-group form-group-runProfile TODO">
						<p><strong>TODO :</strong>
							</br>- Creer un espace de messagerie pour que les runners puissent se contacter en cas de besoin
						</p>
					</div>

				</div>

				<div class="col-md-1"></div>

			</div>

	</div>

	<!-- script permettant de generer la google maps avec les markers de courses -->
	<script type="text/javascript">

		var map;

		function initMap() {

			map = new google.maps.Map(document.getElementById('mapRunProfile'), {
				center: {lat: <?= $run['latitude'] ?>, lng: <?= $run['longitude'] ?>},
				zoom: 16
			});

			var myLatLng = {lat: <?= $run['latitude'] ?>, lng: <?= $run['longitude'] ?>};

			var marker = new google.maps.Marker({
				position: myLatLng,
				//draggable: true,
				map: map,
				title: "<?= $run['run_name'] ?>"
			});

		}

	</script>


<?php $this->stop('main_content') ?>
