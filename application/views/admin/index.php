<h2><?php echo $title; ?></h2>

<?php foreach ($products as $products_item): ?>

        <h3><?php echo $products_item['product_name']; ?></h3>
        <div class="main">
                <?php echo $products_item['product_description']; ?>
        </div>
        <p><a href="<?php echo site_url('index.php/admin/'.$products_item['product_id']); ?>">View article</a></p>

<?php endforeach; ?>