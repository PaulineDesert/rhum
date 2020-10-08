<div class="container">
	<div class="row mt-5">
		<div class="col">
			<div class="container text-center" data-aos="fade-down">
				<p class="h1"><b class="text-warning">Inscrivez-vous</p>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">Inscription</div>
				<div class="panel-body">
					<form method="post" action="<?php echo base_url();?>register/validation">

						<div class="form-group">
							<label>Entrez votre nom</label>
							<input type="text" name="user_name" class="form-control"
								value="<?php echo set_value('user_name'); ?>">
							<span class="text-danger"><?php echo form_error('user_name');?></span>
						</div>
						<div class="form-group">
							<label>Entrez votre Email</label>
							<input type="text" name="user_email" class="form-control"
								value="<?php echo set_value('user_email');?>" />
							<span class="text-danger"><?php echo form_error('user_email');?></span>
						</div>
						<div class="form-group">
							<label>Mot de passe</label>
							<input type="password" name="user_password" class="form-control"
								value="<?php echo set_value('user_password') ?>" />
							<span class="text-danger"><?php echo form_error('user_password');?></span>
						</div>
						<div class="form-group">
							<input type="submit" name="register" class="btn btn-info" />
						</div>
					</form>
				</div>
			</div>




		</div>
	</div>
</div>
