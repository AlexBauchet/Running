<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->


<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Running</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap-theme.min.css') ?>">

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>

<body>
	
	<!-- header apres connexion
    ================================================= -->

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?= $this->url('home') ?>" class="navbar-brand"><font size="7" face="FunSized" color="#D0D0D0">Running</a></font>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li class="TODO">Corriger redirection vers le bon profil</li> -->
					<li><a href="<?= $this->url('viewProfile', ['id' => $w_user['id']]) ?>"><?= $w_user['email']; ?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-1x"></i><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?= $this->url('seekrun') ?>">Trouver une course</a></li>
							<li><a href="<?= $this->url('createrun') ?>">Proposer une course</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?= $this->url('updateProfile') ?>">Modifier mon profil</a></li>
							<li><a href="<?= $this->url('logout') ?>">Se déconnecter</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?= $this->url('cgu') ?>">CGU</a></li>
							<li><a href="<?= $this->url('contacts') ?>">Contacts</a></li>
						</ul>
					</li>
				</ul>

			</div>
		</div>
	</nav>


	<!-- <h1><?= $this->e($title) ?></h1> -->


 		
	<!-- MAIN CONTENT
    ====================================================================== -->

	<section>

		<!-- message de conf ou d'erreur en Session -->
		<?php if(isset($_SESSION['message'])) : ?>
			<div class="alert alert-success msgSession">
				<?= $_SESSION['message']; ?>
				<?php unset($_SESSION['message']); ?>
			</div>
		<?php endif; ?>
		<!-- 
			<?php if(isset($_SESSION['error'])) : ?>
			<div class="alert alert-success msgSession">
				<?= $_SESSION['error']; ?>
				<?php unset($_SESSION['error']); ?>
			</div>
		<?php endif; ?>
		 -->


		<?= $this->section('main_content') ?>

	</section>



	<!-- footer
    ====================================================================== -->

	<footer>

		<div class="container">
			<div class="row">

				<div class="col-md-3 col-md-offset-4"> 		
					<h2 class="h2-footer">Aide</h2>
					<p><a class="liensFooter" href="<?= $this->url('contacts') ?>">Contacts</a></p>
					<p><a class="liensFooter" href="<?= $this->url('cgu') ?>">CGU</a></p>
				</div>

				<div class="col-md-3"> 
					<h2 class="h2-footer">Blog</h2>	
					<p><a class="liensFooter" href="#">Articles</a></p>
				</div>

			</div>
		</div>

		<hr class="hr-footer">

		<div class="container">
			<div id="footer-rs" class="row">
				<div class="col-md-8 col-md-offset-2"> 

					<div>
						<h2 class="h2-footer">Rejoignez-nous sur</h2>
					</div>

					<div id="logo-rs">
						<p><a href="http://facebook.com"><i class="fa fa-facebook-official fa-2x footer-rs"></i></a></p>
						<p><a href="http://google.com"><i class="fa fa-google fa-2x footer-rs"></i></a></p>
						<p><a href="http://instagram.com"><i class="fa fa-instagram fa-2x footer-rs"></i></a></p>
						<p><a href="http://linkedin.com"><i class="fa fa-linkedin fa-2x footer-rs"></i></a></p>
					</div>

					<div id="copyright">
						<p>&copy; 2016 Running</p>
					</div>
				
				</div>
			</div>	
		</div>


		<!-- SCRIPTS -->

		<script src="<?= $this->assetUrl('js/vendor/jquery-1.11.2.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/vendor/bootstrap.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>

		<!-- Chargement de l'API de Google -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7fVAvmE9RrJN6uombxucDLZTL3ogyqE0&callback=initMap"></script>
		
		<script src="<?= $this->assetUrl('js/main.js') ?>"></script>



	</footer>

</body>
</html>