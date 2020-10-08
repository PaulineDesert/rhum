<h2><?= $title; ?></h2>
<div class="row">
	<div class="col-4">
		<div class="card" style="width: 18rem;">
			<img src="<?= $products_item['product_image']; ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title"><?= $products_item['product_name']; ?></h5>
				<p class="card-text"><?= $products_item['product_description']; ?></p>
				<a href="<?= site_url('product/'.$products_item['type_id']); ?>/" class="btn btn-primary">Ajouter au panier</a>
			</div>
		</div>
	</div>
</div>