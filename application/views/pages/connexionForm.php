<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/admin/create'); ?>

    <label for="login">Login</label>
    <input type="text" name="login" /><br />

    <label for="password">Mot de passe</label>
    <input type="password" name="password" /><br />

    <input type="submit" name="submit" value="Create news item" />

</form>