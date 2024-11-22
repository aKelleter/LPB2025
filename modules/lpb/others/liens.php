<?php 
    require_once('../../../boot.php');  
    $_SESSION['R'] = R3;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = OTHERS;      
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
                        <h1 class="mt-5 text-center">Liens</h1>
                        <p class="text-center small">
                            <b class="red">Sources utiles</b>
                        </p>
                        <p> 
                            Vous trouverez ci-dessous une liste de liens vers des sites qui vous permettront de compléter vos connaissances sur les technologies, 
                            des techniques et astuces et les outils que nous utilisons en développement Web.
                            <ol>
                                <li><a href="https://www.php.net/manual/fr/features.commandline.webserver.php" target="_blank">Le server web interne de PHP</a></li>                               
                            </ol>                 
                        </p>

                    </div> <!--col-md-10-->
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>