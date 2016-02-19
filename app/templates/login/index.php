<?php $this->layout('layout', ['title' => 'Login', 'nav' =>'login']) ?>

<?php $this->start('main_content') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<?php if(isset($errors['login'])): ?>
					<div class="alert alert-danger">
						<p><?= $errors['login'] ?></p>
					</div>
				<?php endif; ?>

				<!-- Bouttons Connexion Facebook/Google+ -->
				<div class="button">
					<button type="button" class="btn btn-fb" data-dismiss="modal"><i id="iFb" class="fa fa-facebook-official fa-2x"></i>Connexion avec Facebook</button>
				</div>
				<div class="button">
					<button type="button" class="btn btn-google" data-dismiss="modal"><i id="iGoogle" class="fa fa-google fa-2x"></i>Connexion avec Google</button>
				</div>
				<hr>

				<form class="form-container" method="POST" action="<?= $this->url('loginUser'); ?>">
					<div class="form-group">
						<label for="email" hidden>Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>

					<div class="form-group">
						<label for="password" hidden>Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>

					<div>
						<label id="labCgu" for="cgu" class="pure-checkbox">
							<input id="memoId" name="memoId" type="checkbox"> Se souvenir de moi</a>
						</label>

						<p id="forgetPwd"><a class="forgetPwd" href="forgetPwd.php">Mot de passe oublié ?</a></p>
					</div>	

					<div class="btn-form">
						<button type="submit" class="btn btn-primary">Connexion</button>
					</div>

					<div class="modal-footer">
						<p>Pas encore membre Running ? <a href="<?= $this->url('register') ?>">Inscription</a></p>
					</div>
	
				</form>

			</div>
		</div>

		<hr class="hr-footer">

	</div> <!-- class="container"> -->		


<?php $this->stop('main_content') ?>
