<?php $this->layout('layout', ['title' => 'Login', 'nav' =>'login']) ?>

<?php $this->start('main_content') ?>

	<div class="container container-main-content">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">

				<?php if(isset($errors['login'])): ?>
					<div class="alert alert-danger">
						<p><?= $errors['login'] ?></p>
					</div>
				<?php endif; ?>

				<div class="boxLoginRegister">

					<form class="form-container formLoginRegister" method="POST" action="<?= $this->url('loginUser'); ?>">

						<!-- Bouttons Connexion Facebook/Google+ -->
						<div class="button">
							<button type="button" class="btn btn-fb" data-dismiss="modal"><i id="iFb" class="fa fa-facebook-official fa-2x"></i>Connexion avec Facebook</button>
						</div>

						<div class="button">
							<button type="button" class="btn btn-google" data-dismiss="modal"><i id="iGoogle" class="fa fa-google fa-2x"></i>Connexion avec Google+</button>
						</div>

						<div class="text-center ouEmail">
							<p>- ou connectez-vous avec votre email -</p>
						</div>

						<div class="form-group">
							<label for="email" hidden>Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
						</div>

						<div class="form-group">
							<label for="password" hidden>Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
						</div>

						<div>
							<label id="labCgu" for="cgu" class="pure-checkbox">
								<input id="memoId" name="memoId" type="checkbox"> Se souvenir de moi</a>
							</label>
							<p id="forgetPwd"><a class="forgetPwd" href="forgetPwd.php">Mot de passe oublié ?</a></p>
						</div>	

						<div class="btn-form btnModal">
							<button type="submit" class="btn btn-primary">Connexion</button>
						</div>

						<div class="modal-footer">
							<p>Pas encore membre Running ? <a href="<?= $this->url('register') ?>">Inscription</a></p>
						</div>
		
					</form>

				</div>
			</div>
		</div>

	</div>		


<?php $this->stop('main_content') ?>
