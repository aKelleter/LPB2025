<?php
    require_once('conf.php');
 
    $message = '';

    $_SESSION['WHOAMI'] = 'Alain';

    // Si le formulaire est soumis    
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['login']) && isset($_POST['password']))
        {   
            switch(TYPE_CONNECT) {
                
                case 'database':                    
                    if(loginWithDataBase($_POST['login'], $_POST['password'])) {                        
                        header('Location: admin.php');
                        exit;
                    }else{
                        $message = '<div id="message" class="alert alert-danger text-center">Identifiants incorrects</div>';
                    }
                    break;

                case 'array': 
                    if(loginWithArray(USER_LIST, $_POST['login'], $_POST['password'])) {
                        header('Location: admin.php');
                        exit;
                    }else{
                        $message = '<div id="message" class="alert alert-danger text-center">Identifiants incorrects</div>';
                    }
                    break;
                default:
                    $message = '<div id="message" class="alert alert-danger text-center">Type de connexion non défini</div>';
                    break;                
            }
        }    
    }
    
    // Redirection si déjà connecté     
    if(checkConnexion()) {
        header('Location: admin.php');
        exit;
    }
    
?>
<?= HTMLHead('Login')?>
<body>
    <div class="container">
        <h1 class="mt-5 mb-5 text-center"><?= APP_NAME?></h1>  
        <?= HTMLMenu('login')?>
        <hr>
        <?php echo $message; ?>
        <h1 class="text-center">Connexion</h1>
        <p class="text-center">Connectez-vous pour accéder à l'administration</p>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="mt-5" action="" method="post">
                    <div class="mb-3">
                        <label class="form-label start">Identifiant</label>
                        <input class="form-control" type="text" name="login" id="login" placeholder="login">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="password">
                    </div>
                    <input class="btn btn-primary" type="submit" value="login">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <script src="assets/js/yon.js"></script>
</body>
</html>