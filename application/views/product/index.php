<h2><?php echo $title; ?></h2>

<?php foreach ($products as $products_item): ?>
	<div class="card" style="width: 18rem;">
		<img src="<?php echo $products_item['product_image']; ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?php echo $products_item['product_name']; ?></h5>
			<p class="card-text"><?php echo $products_item['product_description']; ?></p>
			<a href="<?php echo site_url('index.php/admin/'.$products_item['product_id']); ?>" class="btn btn-primary">Ajouter au panier</a>
		</div>
	</div>
<?php endforeach; ?>
