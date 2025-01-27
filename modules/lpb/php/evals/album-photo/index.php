<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;      
?>
<!doctype html>
<html lang="fr">
    <?php require_once $_SESSION['R'].'app'.DS.'head.php'; ?>
    <body>    
    <?php require_once $_SESSION['R'].'app'.DS.'header.php'; ?>
        <div class="b-divider"></div>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">                       
                        <h1 class="mt-5 text-center">Evaluation : <span class="color_dark_green">Album photos</span></h1>  

                        <h3>Présentation</h3>
                        <p>
                           Cette évaluation consiste réaliser une application de type gestion d'album photos. <br>
                           C'est une évaluation à faire en groupe. Deux ou trois groupes maximum. <br>
                        </p>
                        <p>
                           Vous avez une semaine pour réaliser cette évaluation. <br>
                           Chaque groupe doit me rendre l'archive de son application avant le cours du lundi 3 février 2025 (18h00). <br>
                           L'archive doit être envoyée via la plateforme ItsLearning. <br>                           
                        </p>
                        <b>Informations</b> : <br>
                        <p>                            
                            Vous devez réaliser une application de gestion d'album photos. <br>
                            L'application doit permettre de :
                        </p>
                        <ul>
                            <li>Afficher les albums photos sur la page d'accueil pour les visiteurs</li>
                            <li>Avoir une page pour permettre à l'utilisateur de s'identifier</li>
                            <li>Une fois l'utilisateur identifié, il peut ajouter, supprimer, modifier les photos via une page d'administration</li>
                            <li>Les photos doivent être stockées dans des albums. Un répertoire = album
                            <ul>L'utilisateur identifé peut :
                                <li>Ajouter une photo dans un album</li>
                                <li>Supprimer une photo</li>                               
                                <li>Ajouter un album</li>
                                <li>Supprimer un album</li>                            
                                <li>Afficher les photos :)</li>
                            </ul>
                        </ul>
                        <b>Lien de démonstration</b> : <br>
                        <p>                           
                            <a href="correctifs/index.php" target="_blank">&#128279; Démo en cours de dev</a>
                        </p>
                        
                        <p>
                           <b>Happy coding ! :)</b>
                        </p>
                        <hr>

                    </div> <!--col-md-10-->
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].'app'.DS.'footer.php'; ?>
        <?php require_once $_SESSION['R'].'app'.DS.'loadscripts.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>