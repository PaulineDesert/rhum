<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light sticky-top mb-5">
	<a class="navbar-brand text-danger" href="<?php echo site_url(''); ?>">La cave à rhum</a>
	<!--Ajouter un logo quand on en aura un-->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item">
				<a class="nav-link text-warning" href="<?php echo site_url('product/1'); ?>">Rhums blancs</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?php echo site_url('product/2'); ?>">Rhums ambrés</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-warning" href="<?php echo site_url('product/3'); ?>">Rhums vieux</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?php echo site_url('product/4'); ?>">Rhums arrangés</a>
			</li>
			
			<?php if (isset($_SESSION['admin'])) { ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
							aria-expanded="false"><?= ucfirst($_SESSION['admin']['0']['admin_pseudo']) ?></a>
						<div class="dropdown-menu bg-dark">
							<a class="dropdown-item text-warning" href="<?php echo site_url('admin'); ?>">Accès admin</a>
								<a class="dropdown-item text-danger" href="<?php echo site_url('admin/deconnexion'); ?>">Déconnexion</a>
						</div>
					</li>
				<?php } else { ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
							aria-expanded="false">Connexion</a>
						<div class="dropdown-menu bg-dark">
							<a class="dropdown-item text-warning" href="<?php echo site_url('register'); ?>">Client</a>
								<a class="dropdown-item text-warning" href="<?php echo site_url('pages/loginAdmin'); ?>">Admin</a>
						</div>
					</li>
				<?php } ?>
			
			
			
		</ul>
	</div>
</nav>
