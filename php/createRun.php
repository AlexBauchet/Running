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

	<link rel="stylesheet" href="../css/createRun.css">
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
		<h1 class="text-center h1-seekRun">Créer une course</h1>
	</div>

	<!-- Menu trouver une course -->
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form>

					<div class="form-group">
						<label class="inputCreateRun" for="address">Adresse</label>
						<input id="address" name="address" type="text" placeholder="Adresse de départ" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="zipCode">Code postal</label>
						<input id="zipCode" name="zipCode" type="text" placeholder="Code postal" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="city">Ville</label>
						<input id="city" name="city" type="text" placeholder="Ville de départ" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="country">Pays</label>
						<input id="country" name="country" type="text" placeholder="Pays" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="departureDate">Date de départ</label>
						<input id="departureDate" name="departureDate" type="date" placeholder="Date" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="departureDate">Heure de départ</label>
						<input id="departureTime" name="departureTime" type="text" placeholder="Heure" class="form-control">
					</div>

					<div class="form-group">
						<label class="inputCreateRun" for="runLevel">Niveau du run</label>
						<input id="runLevel" name="runLevel" type="text" placeholder="Niveau" class="form-control">
					</div>

					<div class="form-group">
						<div id="rngs">
						    <label class="rng_ttl">Barre de progression</label>
						    <input type="range" class="rng" min="0" value="0" max="10" step="1">
						    <label class="val">0</label>
						</div>    
					</div>

					<a type="submit" class="btn btn-danger">Ajouter</a>

				</form>
			</div>
		</div>
	</div>


	<!-- Affichage de la Map et ajouter une course -->
	<div class="container">


	<!-- Ne pas fermer la </div class='container'> ici.. Se ferme après le footer --> 


		<!-- NE PAS TOUCHER -->
		<hr class="hr-footer">


		<!-- FOOTER -->
		<?php include(__DIR__.'/../include/footer.php'); ?>


	</div> <!-- /container -->        


</body>
</html>
