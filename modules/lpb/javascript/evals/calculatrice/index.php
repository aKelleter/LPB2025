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
                        <h1 class="mt-5 text-center">Evaluation : <span class="color_dark_green">Calculatrice</span></h1>  

                        <h3>Présentation</h3>
                        <p>
                        Voici un exercice simple pour réaliser une calculatrice en JavaScript en utilisant prompt pour entrer les valeurs et 
                        l'opération souhaitée. Le résultat sera affiché via alert. <br>
                        Objectif : <br>
                        <br>
                        Créer une calculatrice qui demande à l'utilisateur : <br>
                        <br>
                            De saisir un premier nombre. <br>
                            De choisir une opération (+, -, *, /). <br>
                            De saisir un deuxième nombre. <br>
                            D'afficher le résultat. <br>
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