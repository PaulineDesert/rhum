<h2><?php echo $title; ?></h2>

<?php foreach ($product as $products): ?>

        <div class="card" style="width: 18rem;">
            <img src="<?php echo $products['product_image']?>" class="card-img-top" alt="<?= $products['product_name']?>">
            <div class="card-body">
                <h5 class="card-title"><?= $products['product_name']?></h5>
                <p class="card-text"><?= $products['product_description']?></p>
                <a href="#" class="btn btn-warning">Ajouter au panier</a>
            </div>
        </div>
<?php endforeach; ?>