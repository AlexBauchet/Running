<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div id="loginID" class="modal-body">
				<form id="formLogin" method="POST" action="loginHandler.php">
					
					<div class="button">
						<button type="button" class="btn btn-fb" data-dismiss="modal"><i id="iFb" class="fa fa-facebook-official fa-2x"></i>Connexion avec Facebook</button>
					</div>

					<div class="button">
						<button type="button" class="btn btn-google" data-dismiss="modal"><i id="iGoogle" class="fa fa-google fa-2x"></i>Connexion avec Google</button>
					</div>

					<hr>
					
					<!-- Login		 -->
					<div class="form-group <?php if(isset($_SESSION['loginErrors']['user'])) echo 'has-error'; ?>">
						<input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php if(isset($_SESSION['lastLogin']['email'])) echo $_SESSION['lastLogin']['email']; ?>">
						<?php if(isset($_SESSION['loginErrors']['user'])): ?>
							 <span class="help-block">
							 	<?php echo ($_SESSION['loginErrors']['user']); ?>
							 </span>
						<?php endif; ?>
					</div>

					<!-- Password -->
					<div class="form-group <?php if(isset($_SESSION['loginErrors']['password'])) echo 'has-error'; ?>">
						<input type="password" class="form-control" id="password" name="password" placeholder="password">
						<?php if(isset($_SESSION['loginErrors']['password'])): ?>
							 <span class="help-block">
							 	<?php echo ($_SESSION['loginErrors']['password']); ?>
							 </span>
						<?php endif; ?>
					</div>




						<label id="labCgu" for="cgu" class="pure-checkbox">
							<input id="memoId" name="memoId" type="checkbox"> Se souvenir de moi</a>
						</label>

						<p id="forgetPwd"><a class="forgetPwd" href="forgetPwd.php">Mot de passe oublié ?</a></p>
						
						<div class="button">
							<button type="submit" name="action" class="btn btn-success">Connexion</button>
						</div>

					</div>
				</form>
			</div>

			<div class="modal-footer">
				<p>Vous n'avez pas de compte ? <a href="register.php">Inscription</a></p>
			</div>

		</div>
	</div>
</div>