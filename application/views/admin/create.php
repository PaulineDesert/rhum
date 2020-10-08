<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/create'); ?>
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

</form>