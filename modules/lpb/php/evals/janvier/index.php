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
                        <h1 class="mt-5 text-center">Evaluation : <span class="color_dark_green">Janvier</span></h1>  

                        <h3>Présentation</h3>
                        <p>
                            L'évaluation du mois de janvier consiste à résoudre et proposer une solution pour une série de neuf petits projets.
                        </p>
                        <h4 class="red">1. Premier projet : Un générateur de citation aléatoire</h4>
                        <p>
                            <b>Objectif</b> : Créer une page qui affiche une citation aléatoire à chaque rechargement. <br>
                            <b>Concepts pratiqués</b> :
                        </p>
                        <ul>
                           <li>Les Variables (chaîne de caractères)</li>
                           <li>Les Tableaux (stockage des citations)</li>
                           <li>Les Boucles (pour parcourir le tableau de citations)</li>
                           <li>Les Fonctions internes au PHP (pour générer un nombre aléatoire)</li>
                        </ul>
                        <p>
                            <b>Informations</b> : <br>
                            - Voici un exemple de tableau de citations à utiliser (vous pouvez proposer le vôtre ou en ajouter d'autres :)) : <br>                            
                            <textarea class="code-php">
                                    $citations = [
                                        "La vie est un mystère qu'il faut vivre, et non un problème à résoudre. - Gandhi",
                                        "Le plus grand risque est de ne prendre aucun risque. - Mark Zuckerberg",
                                        "Le succès c'est tomber sept fois, se relever huit. - Proverbe japonais",
                                        "Le seul endroit où le succès précède le travail est dans le dictionnaire. - Vidal Sassoon",
                                        "Le succès est la somme de petits efforts répétés jour après jour. - Robert Collier ",
                                        "La persévérance est la clé du succès. - Mazouz Hacène",
                                        "La connaissance s'acquiert par l'expérience, tout le reste n'est que de l'information. - Albert Einstein",
                                        "L'échec est une opportunité de recommencer plus intelligemment. - Henry Ford",
                                    ];
                            </textarea>
                            - Vous allez devoir sélectionner une citation aléatoire à chaque rechargement de la page pour ensuite l'afficher. <br>
                            - Séparez au maximum la logique de votre code de l'affichage (structure HTML avec du code PHP pour afficher ex.: <cite>&lt;?= $texte ?&gt;</cite>). <br>
                            - Vous pouvez utiliser la fonction <cite>array_rand()</cite> ou la fonction <cite>rand()</cite> pour générer un index aléatoire. <br>
                            - Vous pouvez ajouter un bouton pour recharger une nouvelle citation. <br>
                        </p>                                          
                        <p>
                            Happy coding ! :)
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