<h2 class="text-center mb-5"><?php echo $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('pages/connexionForm'); ?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
         
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                
                <input type="submit" name="submit" value="Connexion" class="btn btn-primary"/>
        
        </div>
    </div>
</div>