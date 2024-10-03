<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;     
    
   // Chargement du/des fichier(s) de code source
   $source_code = loadFile(FILENAME_SOURCE_CODE);
   require_once(FILENAME_EXPLANATION);
   require_once(FILENAME_RESSOURCES);    
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
                        <h1 class="mt-5 text-center">Leçon 02 : <span class="color_dark_green">Les commentaires</span></h1>  
                        <?= getHtmlSubMenu('01', '03'); ?>
                        <?= getHtmlBlocWhatCodeDoes("Utiliser des commentaires dans votre code source"); ?>

                        <?= getHtmlBlockSourceCode($source_code, FILENAME_SOURCE_CODE); ?>
                        
                        <?php 
                            $renderStr = 'Ce texte est affiché';
                            echo getHtmlBlockRendering($renderStr);
                        ?>

                        <?php
                            $explanations = [
                                "Les commentaires sont des éléments de texte qui ne sont pas exécutés par le programme.",
                                "Ils sont utilisés pour expliquer le code source et rendre sa compréhension plus aisée. Ou commenter des parties de code qui ne sont 
                                pas encore ou plus utilisées.",
                                "Pour écrire un commentaire sur une seule ligne, on utilise deux slashes : <code>//</code> ou le dièse :<code>#</code> (moins courant).",
                                "Pour écrire un commentaire sur plusieurs lignes, on utilise <code>/*</code> pour ouvrir le commentaire et <code>*/</code> pour le fermer."                               
                            ];
                            echo getHtmlBlockExplanations($explanations);
                        ?>

                        <?php
                            $ressources = [
                                ['url' => 'https://www.php.net/manual/fr/language.basic-syntax.comments.php', 'title' => 'Source : php.net : les commentaires']
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