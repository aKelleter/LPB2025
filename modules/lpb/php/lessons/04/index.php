<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;     
    
    // Chargement du/des fichier(s) de code source
    $files =['1.var.php'];
    $code_source = loadSourceCode($files[0]);    
?>
<!doctype html>
<html lang="fr">
    <?php require_once $_SESSION['R'].'app'.DS.'head.php'; ?>
    <body>
    <?php require_once $_SESSION['R'].'assets'.DS.'svg.html'; ?>  
    <?php require_once $_SESSION['R'].'app'.DS.'header.php'; ?>
        <div class="b-divider"></div>

        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">                       
                        <h1 class="mt-5 text-center">Leçon 04 : <span class="color_dark_green">Découvrir les variables.</span></h1>  
                        <?= getHtmlSubMenu('03', '05'); ?>
                        <?php
                        $wcd = "<p>On va apprendre à utiliser des variables dans notre code.<br>Les variables sont des espaces mémoires (des conteneurs) qui permettent de stocker des données/valeurs, ces données 
                                peuvent varier au fil du temps, pendant l'exécution du programme.</p>
                               Voici quelques règles d'utilisation des variables en PHP : <br>
                                    <ul>
                                    <li> les variables sont précédées du symbole <code>$</code> suivi du nom de la variable. </li>
                                    <li> les noms des variables sont sensibles à la casse (majuscules et minuscules)</li>
                                    <li> les noms de variables ne peuvent pas commencer par un chiffre</li>
                                    <li> les noms de variables ne peuvent pas contenir d'espaces</li>
                                    <li> les noms de variables ne peuvent pas contenir de caractères spéciaux (sauf le _ caractère souligné ou underscore)</li>
                                    <li> les noms de variables ne peuvent pas contenir de caractères accentués</li>
                                    <li> il existe des noms réservés (mots-clés) qui ne peuvent pas être utilisés comme noms de variables</li>
                                    <li> 
                                        le caractère d'assignation est <code>=</code> (l'égal). C'est ce que l'on appel un opérateur d'affectation. 
                                        Il sert à attribuer une valeur à une variable
                                    </li>
                                    <li>
                                        (+) on utilise régulièrement un autre caractère, le <code>.</code> (le point). C'est l'opérateur de concaténation.
                                        Il permet de concaténer (coller) des chaînes de caractères entre elles, les unes à la suite des autres.
                                    </li>
                                    </ul>
                                    ";

                        echo getHtmlBlocWhatCodeDoes($wcd); 
                        ?>

                        <?= getHtmlBlockSourceCode($code_source, $files[0]); ?>
                        
                        <?php 
                            $renderStr = "
                                            Affichage des variables nom, prenom et age avec la commande echo :<br>
                                            JohnDoe25<br>
                                            --------------------------------<br>
                                            Affichage plus \"propre\" des variables nom, prenom et age avec la commande echo (et des guillemets simples) et le caractère de concaténation<br>
                                            Prénom : John, Nom : Doe, Age : 25<br>
                                            --------------------------------<br>
                                            Affichage plus \"propre\" des variables nom, prenom et age avec la commande echo (et des guillemets doubles)<br>
                                            Prénom : John, Nom : Doe, Age : 25<br>
                                            --------------------------------<br>
                                            Affichage de la variable prenom avant la mise à jour : John<br>
                                            Affichage de la variable prenom après mise à jour : Jane<br>
                                            --------------------------------<br>
                                        ";
                            echo getHtmlBlockRendering($renderStr);
                        ?>

                        <?php
                            $explanations = [
                                "Les variables sont des boîtes dans lesquelles on peut stocker des données.",
                                "Elles sont précédées du symbole <code>$</code> suivi du nom de la variable.",
                                "Leur nom est sensible à la casse et doit respecter une série de règles.",
                                "Les données stockées dans une variable peut varier au fil du temps.", 
                                "Leur type peut être un entier, une chaîne de caractères, un booléen, un tableau, etc.",                              
                            ];
                            echo getHtmlBlockExplanations($explanations);
                        ?>

                        <?php
                            $ressources = [
                                ['url' => 'https://www.php.net/manual/fr/language.variables.basics.php', 'title' => 'Php.net : Les variables - essentiel']
                            ];
                            echo getHtmlBlockRessources($ressources);
                        ?>      

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