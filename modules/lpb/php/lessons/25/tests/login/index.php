<?php
require_once 'boot.php';
/**
 * **********************************************
 *                   CONTROLLER
 * **********************************************
 */

$message = '';

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
   switch(CONNEXION_TYPE)
   {
        case 'ARRAY' :    
            if (loginWithArray(USER_LIST, $_POST['user_email'], $_POST['user_pwd'])){            
                header('Location: '.D_APP.DS.'home.php');
                exit;
            }else{
                $message = '<div class="alert alert-danger text-center">Identifiants incorrects</div>';
            } 
            break;
        case 'DATABASE' :
            if (loginWithDatabase($_POST['user_email'], $_POST['user_pwd'])){
                header('Location: '.D_APP.DS.'home.php');
                exit;
            }else{
                $message = '<div class="alert alert-danger text-center">Identifiants incorrects</div>';
            }
            break;        
    }
}

// Si l'utilisateur est déjà connecté, on le redirige vers la page d'accueil
if(checkConnexion())
{
    header('Location: '.D_APP.DS.'home.php');
    exit;
// Sinon, on affiche le formulaire d'identification    
}else{
    $form = HTMLFormIdentify();
}

?>
<!DOCTYPE html>
<html lang="fr">
<?= HTMLHead() ?>
<body>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">                
                <div class="col-md-4"></div>
                <div class="col-md-4">                    
                    <h1 class="mb-5 text-center">My First App</h1>
                    <?= HTMLMenu() ?>
                    <?= $message ?>
                    <?= $form ?>                    
                    <?= HTMLFooter() ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
</body>
</html>

