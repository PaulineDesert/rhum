<h2><?php echo $title; ?></h2>
<h1><a href="<?= site_url('index.php/admin/create/') ?>" class="btn btn-success">Ajouter</a></h1>
<div class="row">
<?php foreach ($products as $products_item): ?>
        <div class="col-2">
                <div class="card">
                <img src="../../../assets/imgs/<?= $products_item['product_image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?= $products_item['product_name']; ?></h5>
                <a href="<?= site_url('/admin/update/'.$products_item['product_id']); ?>" class="btn btn-warning">Modifier</a>
                <a href="<?= site_url('/admin/delete/'.$products_item['product_id']); ?>" class="btn btn-danger">Supprimer</a>
                </div>
                </div>
        </div>
<?php endforeach; ?>
</div>

