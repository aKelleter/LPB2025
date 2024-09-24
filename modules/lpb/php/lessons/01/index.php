<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;     
    
    // Chargement des fichiers de code source
    $code1_hello = file_get_contents('1.hello.php');
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
                        <h1 class="mt-5 text-center">Leçon 01 : <span class="color_dark_green">Ecrire ses premières lignes de code</span></h1>
                                               
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">                                
                                <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%"><?= $code1_hello ?></textarea>                                
                                <a class="btn btn-primary" href="1.hello.php" target="_blank">Exécuter</a>                                
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">  
                                <h6>Rendu à l'écran : </h6>  
                                <div class="result">Hello World !</div>
                            </div>
                        </div>

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