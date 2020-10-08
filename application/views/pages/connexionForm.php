<h2 class="text-center mb-5"><?php echo $title; ?></h2>

<?= form_open('pages/connexionForm'); ?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
         
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                if (validation_errors() !== null) {
                    echo '
                    <div class="alert alert-success">
                        <p class="m-0">Veuillez renseigner les champs login et mot de passe</p>
                    </div>
                    ';
                }
                ?>
                <input type="submit" name="submit" value="Connexion" class="btn btn-primary"/>
        
        </div>
    </div>
</div>