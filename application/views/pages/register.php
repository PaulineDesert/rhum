<div class="container">

	<div class="row">
			<div class="col-md-6">
				<!-- Connexion -->
				<header>
					<div class="container text-center" data-aos="fade-down">
					<p class="h1"><b class="text-warning">Connexion</b></p>
					</div>
				</header>
					<div class="panel panel-default">
						<div class="panel-body">
						
							<form method="post" action="<?= base_url('register/login');?>">
								
								<div class="form-group">
									<label>Entrez votre email</label>
									<input type="text" name="customer_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
									<!--<span class="text-danger"><?php echo form_error('user_email'); ?></span>-->
								</div>
								<div class="form-group">
									<label>Entrez votre mot de passe</label>
									<input type="password" name="customer_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
									<!--<span class="text-danger"><?php echo form_error('user_password'); ?></span>-->
								</div>
								<div class="form-group">
									<input type="submit" name="login" value="Me connecter" class="btn btn-info" />
								</div>
							</form>
						</div>
					</div>
				</div>

			<div class="col-md-6">
				<!-- Inscription -->
					<header>
						<div class="container text-center" data-aos="fade-down">
						<p class="h1"><b class="text-warning">Inscription</b></p>
						</div>
					</header>
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
						if($this->session->flashdata('message'))
						{
						echo '
						<div class="alert alert-success">'.$this->session->flashdata('message').'</div>';
						}
						?>
							<form method="post" action="<?= base_url('register/validation');?>">
								<div class="form-group">
									<label>Entrez votre nom</label>
									<input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
									<span class="text-danger"><?php echo form_error('user_name'); ?></span>
								</div>
								<div class="form-group">
									<label>Entrez votre email</label>
									<input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
									<span class="text-danger"><?php echo form_error('user_email'); ?></span>
								</div>
								<div class="form-group">
									<label>Entrez votre mot de passe</label>
									<input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
									<span class="text-danger"><?php echo form_error('user_password'); ?></span>
								</div>
								<div class="form-group">
									<input type="submit" name="register" value="M'inscrire" class="btn btn-info" />
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>


	<!-- end container -->
</div>
