<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;     
    
    // Chargement du/des fichier(s) de code source
    $files =['1.echo-print.php'];
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
                        <h1 class="mt-5 text-center">Leçon 03 : <span class="color_dark_green">Utiliser les structures "echo" et "print" pour afficher un résultat.</span></h1>  

                        <?= getHtmlBlocWhatCodeDoes(""); ?>

                        <?= getHtmlBlockSourceCode($code_source, $files[0]); ?>
                        
                        <?php 
                            $renderStr = '';
                            echo getHtmlBlockRendering($renderStr);
                        ?>

                        <?php
                            $explanations = [
                                "",
                                "",
                                "",
                                ""                               
                            ];
                            echo getHtmlBlockExplanations($explanations);
                        ?>

                        <?php
                            $ressources = [
                                ['url' => '', 'title' => '']
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