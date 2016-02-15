<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Running</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/modal.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- HEADER -->
	<?php include(__DIR__.'/include/header.php'); ?>


	<!-- MAIN CONTENT -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Slideshow ou Film de runners</h1>
			<p>Insérer une video ou des photos sur le slidshow.</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Google Maps</h2>
				<p>Insérer une photo google maps non intéractive ?</p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		</div>

		<hr>


		<!-- INCLUDE MODALS SUR HOMEPAGE UNIQUEMENT -->
		<?php include(__DIR__.'/modal/login.php'); ?>
		<?php include(__DIR__.'/modal/register.php'); ?>


		<!-- FOOTER -->
		<?php include(__DIR__.'/include/footer.php'); ?>


	</div> <!-- /container -->        


</body>
</html>
