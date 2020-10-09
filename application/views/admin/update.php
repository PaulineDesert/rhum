<?php echo validation_errors(); ?>
<?php echo form_open('admin/update'); ?>

<h2 class="text-center"><?= $title; ?></h2>
<div class="container p-2 mt-3">
<div class="row">
<?php foreach ($products as $products_item): ?>
	<div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="../assets/imgs/<?= $products_item['product_image']; ?>" class="card-img-top preview<?= $products_item['product_id']; ?>" alt="...">
            <input type="file" name="image" data-preview=".preview<?= $products_item['product_id']; ?>" /><br />
            <input type="hidden" name="productImage" value="<?= $products_item['product_image']; ?>" /><br />
			<div class="card-body">

                <p class="badge badge-warning">
                    <label for="type">Type:</label>
                    <!-- <input type="text" name="type" value="<?= $products_item['type_name']; ?>" /><br /> -->
                    <select class="form-control form-control-lg" name="type">
                            <option value="" selected disabled>-</option>
                        <?php foreach ($products_types as $type): ?>
                            <option value="<?= $type['type_id'] ?>" <?= $type['type_id'] == $products_item['type_id'] ? 'selected' : '' ?> >
                            <?= $type['type_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </p>

                <h5 class="card-title">
                    <label for="name">Nom:</label>
                    <input type="text" name="name" value="<?= $products_item['product_name']; ?>" /><br />
                </h5>

                <label for="description">Description:</label>
                <textarea name="description"><?= $products_item['product_description']; ?></textarea><br />

                <p class="font-weight-bold text-right">
                    <label for="price">Prix:</label>
                    <input type="number" name="price" value="<?= $products_item['product_price']; ?>" /><br />
                </p>

                <div class="input-group input-group-sm my-3"><div class="input-group-prepend ml-1 ml-auto">
                    <label for="quantity">Quantité:</label>
                    <input type="number" name="quantity" value="<?= $products_item['product_qty']; ?>" /><br />
                </div></div>
                
                <button type="submit" value="<?= $products_item['product_id']; ?>" name="updateProduct" class="btn btn-primary m-1 w-100">Modifier ce produit</button>

			</div>
		</div>
    </div>
    <?php endforeach; ?>
</div>
</div>
<!-- 
<div class="row"></div>
    <div class="col-4"></div>
    <div class="col-4">
        <label for="name">Nom:</label>
        <input type="text" name="name" /><br />

        <label for="description">Description:</label>
        <textarea name="description"></textarea><br />

        
        <label for="image">Image:</label>
        <input type="file" name="image" /><br />
        
        <label for="price">Prix:</label>
        <input type="number" name="price" /><br />
        
        <label for="quantity">Quantité:</label>
        <input type="number" name="quantity" /><br />
        
        <label for="type">Type:</label>
        <input type="number" name="type" /><br />


        <input type="submit" name="submit" value="Ajouter ce produit" />
        
        </div>
    <div class="col-4"></div>
</div>

</form> -->