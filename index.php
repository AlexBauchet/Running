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

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/footer.css">

	<script src="js/vendor/jquery-1.11.2.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script> 
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
 

	<script src="js/main.js"></script> 
	
</head>

<body>
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- HEADER -->
	<?php include(__DIR__.'/include/header.php'); ?>


	<!-- MAIN CONTENT -->

	<!-- Main jumbotron for a primary marketing message or call to action -->	
			<div id="slider">
				<figure>
					<img src="img/running.jpeg"></img>
					<img src="img/running2.jpg"></img>
					<img src="img/running3.jpg"></img>
					<img src="img/running4.png"></img>				
				</figure>	
			</div>

	<!-- <div class="jumbotron"> -->
		<div class="container">
			
		</div>	


	<div class="container">
		<div class="row mapsHome">
			<div class="col-md-12 mapsHomeMargin">
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d20992.494806491482!2d2.222156289772821!3d48.87609744963252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x47e67ada5b5ac9db%3A0x4e579c1149864c2e!2sBois+de+Boulogne%2C+Paris!3m2!1d48.862440199999995!2d2.2491727!4m5!1s0x47e664e5248c7707%3A0xa682d0ab0702559d!2s134+Avenue+Pablo+Picasso%2C+Nanterre!3m2!1d48.887978499999996!2d2.2247219!5e0!3m2!1sfr!2sfr!4v1455551657149" 
						width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>


		<hr class="hr-footer">


		<!-- INCLUDE MODALS SUR HOMEPAGE UNIQUEMENT -->
		<?php include(__DIR__.'/modal/login.php'); ?>
		<?php include(__DIR__.'/modal/register.php'); ?>


		<!-- FOOTER -->
		<?php include(__DIR__.'/include/footer.php'); ?>


	</div> <!-- /container -->        


</body>
</html>
