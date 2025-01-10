<?php
$prepath = '../';
require_once $prepath.'boot.php';
/**
 * **********************************************
 *                   CONTROLLER
 * **********************************************
 */

$donnees = null;

// On vérifie si l'utilisateur est connecté
if(checkConnexion())
    $donnees = HTMLUserDatas($_SESSION['user']);
else{
    header('Location: '.$prepath.'index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<?= HTMLHead('Accueil') ?>
<body>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">                
                <div class="col-md-4"></div>
                <div class="col-md-4">                
                    <h1 class="mb-5 text-center">Page d'accueil</h1>
                    <?= HTMLMenu($prepath) ?>
                    <?= $donnees ?>
                    <?= HTMLFooter() ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
</body>
</html>