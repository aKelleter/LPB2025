<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = LDB;     
    
    // Chargement du/des fichier(s)    
    $source_code = loadFile(FILENAME_SOURCE_CODE);     
    require_once(FILENAME_EXPLANATION);
    require_once(FILENAME_RESSOURCES);
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
                        <h1 class="mt-5 text-center">Leçon 27 : <span class="color_dark_green">Pourquoi utiliser les clés primaires et étrangères ?</span></h1>  
                        <?= getHtmlSubMenuLDB('26', '28'); ?>   
                        
                        <?= getHtmlBlocWhatCodeDoes(file_get_contents(FILENAME_WCD)); ?>                       
                        
                        <button onclick="scrollToTop()" class="btn btn-primary mb-4" id="scrollToTopBtn">Haut de page</button> 
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