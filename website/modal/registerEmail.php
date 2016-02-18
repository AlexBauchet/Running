
<!-- Login Modal -->
<!-- <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">
				
				<p>Inscrivez-vous avec <a>Facebook</a> ou <a>Google</a></p>

				<hr>

				<div id="loginID">
				<form method="POST" action="registerHandler.php">

					<div class="form-group <?php if(isset($_SESSION['registerErrors']['email'])) echo 'has-error'; ?>">
					<input type="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($_SESSION['lastRegister']['email'])) echo $_SESSION['lastRegister']['email']; ?>">
						<?php if(isset($_SESSION['registerErrors']['email'])): ?>
							 <span class="help-block">
							 	<?php echo ($_SESSION['registerErrors']['email']); ?>
							 </span>
						<?php endif; ?>
					</div>
					
					<div class="form-group <?php if(isset($_SESSION['registerErrors']['password'])) echo 'has-error'; ?>">
					<input type="password" class="form-control" id="password" name="password" placeholder="password">
						<?php if(isset($_SESSION['registerErrors']['password'])): ?>
							 <span class="help-block">
							 	<?php echo ($_SESSION['registerErrors']['password']); ?>
							 </span>
						<?php endif; ?>
					</div>

					<div class="form-group">
						<label for="passwordConf">Confirmer mot de passe</label>
						<input type="password" class="form-control" id="passwordConf" name="passwordConf" placeholder="confirm password">
					</div>

					<label id="labCgu" for="cgu" class="pure-checkbox">
						<input id="memoId" name="memoId" type="checkbox"> Se souvenir de moi</a>
					</label>

					<p>En créant un compte, vous acceptez les <a>Conditions générales</a> et la <a>Politique de confidentialité</a>.</p>
				
					<div class="button">
						<button type="submit" name="action" class="btn btn-success">Inscription</button>
					</div>

				</form>
				</div>
			</div>

			<div class="modal-footer">
				<p>Déjà membre Running ? <a href="#">Connexion</a></p>
			</div>

		</div>
	</div> -->



<!-- __________________________________________________________________ -->

<!-- MON CODE -->

<?php

	require(__DIR__.'/registerHandler.php');
?>


<div>
	<div>
		<div>
			
			<div>
				
				<p>Inscrivez-vous avec <a>Facebook</a> ou <a>Google</a></p>

				<hr>

				<div>

				<!-- Affiche les erreurs (stockés en session avec la clé registerErrors)-->
				<?php if(isset($_SESSION['registerErrors'])): ?>
					<div class="alert alert-danger">
						<?php foreach($_SESSION['registerErrors'] as $keyError => $error): ?>
							<p><?php echo $error; ?></p>
						<?php endforeach; ?>
					</div>
					<!-- Supprime les erreurs après les avoir affiché 1 fois -->
					<?php unset($_SESSION['registerErrors']); ?>
				<?php endif; ?>



				<form method="POST" action="registerHandler.php">

					<div class="form-group <?php if(isset($_SESSION['registerErrors']['email'])) echo 'has-error'; ?>">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($_SESSION['lastRegister']['email'])) echo $_SESSION['lastRegister']['email']; ?>">
						<?php if(isset($_SESSION['registerErrors']['email'])): ?>
							<span class="help-block">
							 	<?php echo ($_SESSION['registerErrors']['email']); ?>
							</span>
						<?php endif; ?>
					</div>					
				   
		            <div class="form-group <?php if(isset($_SESSION['registerErrors']['password'])) echo 'has-error'; ?>">
		            	<label for="password">Mot de passe</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="password">
						<?php if(isset($_SESSION['registerErrors']['password'])): ?>
							<span class="help-block">
							 	<?php echo ($_SESSION['registerErrors']['password']); ?>
							</span>
						<?php endif; ?>
					</div>

		            <div class="form-group <?php if(isset($_SESSION['registerErrors']['password'])) echo 'has-error'; ?>">
			            <label for="passwordConfirm">Confirmez votre mot de passe</label>
			            <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirmez votre mot de passe">
			            <?php if(isset($_SESSION['registerErrors']['passwordConfirm'])): ?>
							<span class="help-block">
								<?php echo ($_SESSION['registerErrors']['passwordConfirm']); ?>
							</span>
						<?php endif; ?>
		            </div>



					<label id="labCgu" for="cgu" class="pure-checkbox">
						<input id="memoId" name="memoId" type="checkbox"> Se souvenir de moi</a>
					</label>

					<p>En créant un compte, vous acceptez les <a>Conditions générales</a> et la <a>Politique de confidentialité</a>.</p>
				
					<div class="button">
						<button type="submit" name="action" class="btn btn-success">Inscription</button>
					</div>

				</form>
			</div>
		</div>

		<div class="modal-footer">
			<p>Déjà membre Running ? <a href="#">Connexion</a></p>
		</div>

	</div>
</div>