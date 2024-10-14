<?php 
    require_once('boot.php'); 
    $_SESSION['R'] = R0;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = HOME; 
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
                        <h3 class="text-center mt-5">Bienvenue sur l'application LPB - LDB 2025</h3> 
                        <p class="text-center">
                            Cette application sert de support pour les <a href="modules/index.php">modules</a> :
                            <ul>
                                <li>LPB (Language de programmation - Les bases).</li>
                                <li>LDB (Language de bases de données).</li>
                                <li>Ainsi que quelques apprentissages connexes utiles.</li>
                            </ul>
                            Et ce, dans le cadre de la formation X75 : Développeur Web Front-end.
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].DS.'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
