<div class="container">
	<!-- Title -->
	<?= form_open('pages/loginAdmin'); ?>
<header>
  <div class="container text-center" data-aos="fade-down">
    <p class="h1"><b class="text-warning">Connectez-vous</b><br>pour accéder à l'interface administrateur</p>
  </div>
</header>
	<div class="row mt-5">
		<div class="col-sm-4 mx-auto">
			<form>
				<div class="form-group">
					<label for="login">Pseudo</label>
					<input type="text" class="form-control" name="login" id="login">
				</div>
				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
				<button type="submit" class="btn btn-dark d-block mx-auto mb-5">Me connecter</button>
			</form>
		</div>

	</div>

</div>
