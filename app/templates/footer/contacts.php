<?php $this->layout('layoutLog', ['title' => 'Formulaire de contact']) ?>

<?php $this->start('main_content') ?>

<!-- MAIN CONTENT -->
<div class="container">
	<h1 class="text-center">Nous contacter</h1>
</div>

<br/>

<!-- Menu créer une course -->
<div class="container container-main-content">
	<div class="row">

		<div class="col-md-2"></div>

		<div class="col-md-3">			
			<div>
				<h3>Par courrier</h3>
				<p>46 rue de Paradis</p>
				<p>75000 Paris</p>
				<p>France</p>
			</div>
			</br>
			<div id="contactTel">
				<h3>Par téléphone</h3>
				<p>+ 33 (0) 1 23 45 67 89</p>
				<p>(du lundi au vendredi, de 9h à 18h)</p>
			</div>
		
		</div>

	<div class="col-md-5">

		<!-- <form method="POST" action="<?= $this->url('contactFormSubmit'); ?>"> -->
		<form method="POST" action="#">

			<h3 class="form-group form-group-contactForm">Par email</h3>

			<div class="form-group form-group-contactForm">
				<input id="firstname" class="form-control" name="firstname" type="text" placeholder="Prenom">
			</div>

			<div class="form-group form-group-contactForm">
				<input id="lastname" class="form-control" name="lastname" type="text" placeholder="Nom">
			</div>

			<div class="form-group form-group-contactForm">
				<input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
			</div>

			<div class="form-group form-group-contactForm">
				<textarea id="message" class="form-control" name="message" type="text" placeholder="Message"></textarea>
			</div>

			<div class="form-group form-group-contactForm">
				<button type="submit" class="btn btn-danger">Envoyer votre demande</button>
			</div>

			<div class="form-group form-group-runProfile TODO">
				<p>TODO : Faire fonctionner bouton Envoyer votre demande</p>
			</div>

		</form>

	</div>

<div class="col-md-2"></div>

</div>
</div>		


<?php $this->stop('main_content') ?>
