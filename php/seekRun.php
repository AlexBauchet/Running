<?php

	include(__DIR__.'/../config/db.php');

?>




<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Running</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="../css/seekRun.css">
	<link rel="stylesheet" href="../css/modal.css">
	<link rel="stylesheet" href="../css/footer.css">

    <script src="../js/vendor/jquery-1.11.2.min.js"></script>
    <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>

	<script src="../js/main.js"></script>
	
</head>

<body>
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- HEADER -->
	<?php include(__DIR__.'/../include/headerLoggedIn.php'); ?>


	<!-- MAIN CONTENT -->
	<div class="container">
		<h1 class="text-center h1-seekRun">Trouver une course</h1>
	</div>

	<!-- Menu trouver une course -->
	<div class="container containerSeekRun">
		<div class="row formSeekRun">
			<form class="form-inline">

			<div class="form-group">	
				<i class="fa fa-map fa-2x"></i>
			</div>	

				<div class="form-group">
					<!-- <label for="city" hidden></label> -->
					<!-- <span class="input-group-addon"><i class="fa fa-map-o fa-fw"></i></span> -->
					<input id="city" name="city" type="text" placeholder="Ville de départ" class="form-control inputFieldSeekRun">
				</div>

				<div class="form-group">
					<i class="fa fa-calendar fa-2x"></i>
				</div>

				<div class="form-group">
					<input id="departureDate" name="departureDate" type="date" placeholder="Date" class="form-control inputFieldSeekRun">
				</div>

				<div class="form-group">
					<i class="fa fa-clock-o fa-2x"></i> 
				</div>

				<div class="form-group">

					<input id="departureTime" name="departureTime" type="text" placeholder="Heure" class="form-control inputFieldSeekRun">
				</div>

				<div class="form-group">
					<i class="fa fa-venus-mars fa-2x"></i>
				</div>

				<div class="form-group">
					<select class="form-control" id="gender" name="gender"> 
						<option value="" disabled selected>Runners</option>
						<option value="0">N'importe</option>
						<option value="1">Homme</option>
						<option value="2">Femme</option>
					</select>
				</div>

				<div class="form-group">
					<a type="submit" class="btn btn-danger">Chercher</a>
				</div>

			</form>
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
			<p><a class="btn btn-info btn-lg" href="#" role="button">
				<i class="fa fa-fw fa-lg fa-plus-square-o"></i>Ajouter une course</a>
			</p>
		</div>
	<!-- Ne pas fermer la </div class='container'> ici.. Se ferme après le footer --> 


		<!-- NE PAS TOUCHER -->
		<hr class="hr-footer">


		<!-- FOOTER -->
		<?php include(__DIR__.'/../include/footer.php'); ?>


	</div> <!-- /container -->        


</body>
</html>
