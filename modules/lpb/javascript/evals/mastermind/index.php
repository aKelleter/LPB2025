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
                        <h1 class="mt-5 text-center">Evaluation : <span class="color_dark_green">MasterMind</span></h1>  

                        <h3>Présentation</h3>
                        <p>
                            Ecrit un jeu de Mastermind en JavaScript en utilisant des prompt() et alert(). <br>
                            Le jeu génère un code aléatoire de 4 chiffres entre 1 et 6, et le joueur doit deviner la combinaison. <br>
                            À chaque tentative, le jeu indique combien de chiffres sont bien placés et combien sont corrects mais mal placés. <br>
                        </p>
                        <p>
                            Le jeu est géré en boucle et permet au joueur d'entrer des valeurs via la fonction prompt(). <br>
                            Il affiche les résultats avec la fonction alert(). Le joueur a 10 essais pour trouver la combinaison correcte. 
                        </p>
                        <p>
                            Donne la possibilité de quitter le jeu en appuyant sur la touche "Échap" (ou en annulant le prompt). 
                            Si le joueur appuie sur "Échap", un message s'affiche et le jeu s'arrête immédiatement.
                        </p>
                        
                        <b>Lien de démonstration</b> : <br>
                        <p>                           
                            <a href="soluce/index.html" target="_blank">&#128279; Démo</a>
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