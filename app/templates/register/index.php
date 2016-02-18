<?php $this->layout('layout', ['title' => 'Register', 'nav' =>'register']) ?>

<?php $this->start('main_content') ?>


<!-- Register Modal -->
<!-- <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content"> -->

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<!-- <form class="form-container" method="POST" action="<?= $this->url('registerUser'); ?>"> -->
			<form class="modal-body" method="POST" action="<?= $this->url('registerUser'); ?>">

				<!-- Bouttons Connexion Facebook/Google+ -->
				<div class="button">
					<button type="button" class="btn btn-fb" data-dismiss="modal"><i id="iFb" class="fa fa-facebook-official fa-2x"></i>Connexion avec Facebook</button>
				</div>
				<div class="button">
					<button type="button" class="btn btn-google" data-dismiss="modal"><i id="iGoogle" class="fa fa-google fa-2x"></i>Connexion avec Google</button>
				</div>
				<hr>
				<!-- Email -->
				<div class="form-group <?php if(isset($errors['email'])) echo 'has-error' ?>">				
					<input type="email" class="form-control" id="email" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Votre email">
					<?php if(isset($errors['email'])): ?>
						<span class="help-block"><?= $errors['email']; ?></span>
					<?php endif; ?>
				</div>
				<!-- Mot de passe -->
				<div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">				
					<input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
					<?php if(isset($errors['password'])): ?>
						<span class="help-block"><?= $errors['password']; ?></span>
					<?php endif; ?>
				</div>
				<!-- Confirm Mdp -->
				<div class="form-group">					
					<input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirmer votre mot de passe">
				</div>

				<p class="cgu">En créant un compte, vous acceptez les <a>Conditions générales</a> et la <a>Politique de confidentialité</a>.</p>

				<div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>

				<div class="modal-footer">
					<p>Déjà membre Running ? <a href="#">Connexion</a></p>
				</div>

			</form>

		</div>
	</div>
<!-- </div> Div modal  -->

<?php $this->stop('main_content') ?>