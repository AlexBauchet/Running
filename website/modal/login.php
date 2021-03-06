<?php

	require(__DIR__.'/loginHandler.php');

?>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div id="loginID" class="modal-body">
				<form id="formLogin" method="POST" action="#">
					
					<div class="button">
						<button type="button" class="btn btn-fb" data-dismiss="modal"><i id="iFb" class="fa fa-facebook-official fa-2x"></i>Connexion avec Facebook</button>
					</div>

					<div class="button">
						<button type="button" class="btn btn-google" data-dismiss="modal"><i id="iGoogle" class="fa fa-google fa-2x"></i>Connexion avec Google</button>
					</div>

					<hr>
					
					<!-- Login -->
					<div class="form-group">
			            <label for="email">Email</label>
			            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
			        </div>

					<!-- Password -->					
					 <div class="form-group">
			            <label for="password">Password</label>
			            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			        </div>

					<div>
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