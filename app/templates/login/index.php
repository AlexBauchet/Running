<?php $this->layout('layout', ['title' => 'Login', 'nav' =>'login']) ?>

<?php $this->start('main_content') ?>

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<?php if(isset($errors['login'])): ?>
			<div class="alert alert-danger">
				<p><?= $errors['login'] ?></p>
			</div>
		<?php endif; ?>

		<form class="form-container" method="POST" action="<?= $this->url('loginUser'); ?>">
		  <div class="form-group">
		    <label for="email">Email :</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		  </div>

		  <div class="form-group">
		    <label for="password">Password :</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</div>

<?php $this->stop('main_content') ?>
