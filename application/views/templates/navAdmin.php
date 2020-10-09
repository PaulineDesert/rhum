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
				<a class="nav-link text-white" href="<?php echo site_url('admin'); ?>">Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
					aria-expanded="false">Produits</a>
				<div class="dropdown-menu bg-dark">
					<a class="dropdown-item text-warning" href="<?php echo site_url('admin/create'); ?>">Ajouter un produit</a>
					<a class="dropdown-item text-warning" href="<?php echo site_url('admin/update'); ?>">Modifier un produit</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?php echo site_url('admin/orders'); ?>">Commandes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-warning" href="<?php echo site_url('product/3'); ?>">Stocks</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link text-danger" href="#" role="button" aria-haspopup="true"
					aria-expanded="false">Déconnexion</a>
				
			</li>
			<li>
			
			
			
		</ul>
	</div>
</nav>
