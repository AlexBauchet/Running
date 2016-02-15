<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">
				
				<div class="button">
					<button type="button" class="btn btn-primary btn-fb" data-dismiss="modal"><i class="fa fa-facebook-official fa-1x"></i>Connexion avec Facebook</button>
				</div>

				<div class="button">
					<button type="button" class="btn btn-danger btn-google" data-dismiss="modal">Connexion avec Google</button>
				</div>

				<hr>

				<div>
					<div>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					
					<div>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>

					<label id="labCgu" for="cgu" class="pure-checkbox">
						<input id="memoId" name="memoId" type="checkbox"> Se souvenir de moi</a>
					</label>

					<p id="forgetPwd"><a class="forgetPwd" href="forgetPwd.php">Mot de passe oublié ?</a></p>
					
					<div class="button">
						<button type="button" class="btn btn-success">Connexion</button>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<p>Vous n'avez pas de compte ? <a href="register.php">Inscription</a></p>
			</div>

		</div>
	</div>
</div>