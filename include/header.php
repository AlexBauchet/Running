<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<sspan class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Running</a>
		</div>

		 <div id="navbar" class="navbar-collapse collapse">
			<form class="navbar-form navbar-right" role="form">
				
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Connection</button>





				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#registerModal">Inscription</button>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">
				
				<button type="button" class="btn btn-primary" data-dismiss="modal">Connexion avec Facebook</button>

				<button type="button" class="btn btn-danger" data-dismiss="modal">Connexion avec Google</button>

				<hr>

				<div class="form-group">
					<label for="exampleInputEmail1"></label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				
				<div class="form-group">
					<label for="exampleInputPassword1"></label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>

			</div>

			<div class="modal-footer">
				<p>Déjà membre Running ? <a href="login.php">Connexion</a></p>
			</div>

		</div>
	</div>
</div>


			</form>
		</div>


	</div>
</nav>