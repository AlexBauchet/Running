<?php $this->layout('layout', ['title' => 'Accueil', 'nav' =>'home']) ?>

<?php $this->start('main_content') ?>


	<?php if(isset($_SESSION['message'])): ?>
		<div class="alert alert-danger">
			<p><?= $_SESSION['message'] ?></p>
			<?php unset($_SESSION['message']); ?>
		</div>
	<?php endif; ?>


	<!-- Slider -->

	<!-- <div id="slider">
		<figure>
 -->
			<!-- <img src="<?= $this->assetUrl('img/running.jpeg') ?>">
			<img src="<?= $this->assetUrl('img/running2.jpg') ?>">
			<img src="<?= $this->assetUrl('img/running3.jpg') ?>">
			<img src="<?= $this->assetUrl('img/running4.png') ?>"> -->

			<div class="text-center">
				<video autoplay poster="<?= $this->assetUrl('img/runningHP.jpg')?>" id="bgvid" loop controls width="1280" heigth="720">
			   	 	<source src="<?= $this->assetUrl('img/runningHP.webm')?>" type="video/webm">
			    	<source src="<?= $this->assetUrl('img/runningHP.mp4')?>" type="video/mp4">
			   </video>
		   </div>


	<!-- 	</figure>	
	</div> -->


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

	</div> <!-- class="container"> -->
       	

<?php $this->stop('main_content') ?>
