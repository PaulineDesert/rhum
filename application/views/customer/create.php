<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('customer/create'); ?>
<div class="row"></div>
    <div class="col-4"></div>
    <div class="col-4">
        <label for="name">Nom:</label>
        <input type="text" name="name" /><br />

        <label for="email">Mail:</label>
        <input type="mail" name="email" /><br />

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" /><br />


        <input type="submit" name="submit" value="S'inscrire" />
        
        </div>
    <div class="col-4"></div>
</div>

</form>