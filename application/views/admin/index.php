<h2><?php echo $title; ?></h2>
<div class="row">
<?php foreach ($products as $products_item): ?>
        <div class="col-2">
                <div class="card">
                <img src="../../../assets/imgs/<?= $products_item['product_image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?= $products_item['product_description']; ?></h5>
                <p class="card-text"><?= $products_item['product_description']; ?></p>
                <a href="<?= site_url('index.php/admin/delete/'.$products_item['product_id']); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
        </div>
<?php endforeach; ?>
</div>

