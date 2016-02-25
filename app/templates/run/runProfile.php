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

				<div> 
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.421280120741!2d2.2253670160198156!3d48.88830797929036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e664e4cef67dc9%3A0xab3a6e574aaaafbb!2s136+Avenue+Pablo+Picasso%2C+92000+Nanterre!5e0!3m2!1sfr!2sfr!4v1455810481572" 
						width="420" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
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
					<i class="fa fa-hashtag fa-1x i-RunProfile"></i>
					<p><?= $run['description'] ?></p>
				</div>

				<div class="form-group form-group-runProfile">
					<button type="submit" class="btn btn-danger">Participer à la course</button>
				</div>

				<div class="form-group form-group-runProfile TODO">
					<p><strong>TODO :</strong>
						</br>- Creer un espace de messagerie pour que les runners puivent se contacter en cas de besoin
						</br>- Positionner le marker sur la map
						</br>- Faire fonctionner bouton Participer a la course
						</br>- Lien vers profil de l'organisateur en dessous du titre de la course
					</p>
				</div>

			</div>


			<div class="col-md-1"></div>

		</div>

	</div>
       	

<?php $this->stop('main_content') ?>
