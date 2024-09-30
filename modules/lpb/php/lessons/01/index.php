<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;     
    
    // Chargement du/des fichier(s) de code source
    $files =['1.hello-world.php'];
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
                        <h1 class="mt-5 text-center">Leçon 01 : <span class="color_dark_green">Afficher la chaîne "Hello World !"</span></h1>  
                        <?= getHtmlSubMenu('00', '02'); ?>
                        <?= getHtmlBlocWhatCodeDoes('Afficher à l\'écran la chaîne de caractères : "Hello World !"'); ?>

                        <?= getHtmlBlockSourceCode($code_source, $files[0]); ?>

                        <?php 
                            $renderStr = '1 - Hello World !2 - Hello World !3 - Hello World !';
                            echo getHtmlBlockRendering($renderStr);
                        ?>

                        <?php
                            $explanations = [
                                "Pour commencer nous allons entourer le code avec les balises PHP : <code>&lt;?php</code> et <code>?&gt;</code>.",
                                "<code>&lt;?php</code> indique l'ouverture d'un bloc de code écrit en PHP. <code>?&gt;</code> indique la fin du bloc de code PHP.",
                                "Dans le cas où le ficher ne contient que du code PHP, la balise de fermeture <code>?&gt;</code> est facultative.",
                                "Ensuite nous allons <u>appeler une construction du langage</u> (pas une fonction) qui se nomme <code>echo</code> et qui affiche la chaîne de caractères qui est située entre les guillemets (doubles ou simples).",
                                "Les arguments reçus par <code>echo</code> sont une liste d'expressions qui suivent le mot clé echo, séparés par des virgules, et non délimités par des parenthèses.",
                                "On termine l'instruction avec un point-virgule <code>;</code>.",
                                "Pour terminer, il est également possible d'utiliser les guillemets doubles pour délimiter la chaîne de caractères. Nous pouvons même appeler la structure 'echo' avec ou sans les parenthèses."
                            ];
                            echo getHtmlBlockExplanations($explanations);
                        ?>

                        <?php
                            $ressources = [
                                ['url' => 'https://www.php.net/manual/fr/function.echo.php', 'title' => 'Source : php.net : echo']
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