<?php 
    require_once('../boot.php');  
    $_SESSION['R'] = R1; 
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = MOD;     
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
                        <h1 class="mt-5 text-center">Les modules</h1>
                        <div class="container text-center">
                            <div class="row  mt-5 justify-content-center">
                                <div class="col">
                                    <div class="card" style="height: 24rem;">
                                        <svg class="bi d-block mx-auto mt-4 mb-1" width="64" height="64"><use xlink:href="#phpfile"></use></svg>
                                        <svg class="bi d-block mx-auto mt-4 mb-1" width="64" height="64"><use xlink:href="#jsfile"></use></svg>
                                        <div class="card-body">
                                            <h2 class="card-title color-white">Module : LPB</h2>
                                            <p class="card-text">Les bases de la programmation, avec les langages suivants: </p>
                                            <span><a href="<?= $_SESSION['R'].MOD.DS.LPB.DS.PHP.DS ?>" class="btn btn-primary">PHP</a></span>
                                            <span><a href="<?= $_SESSION['R'].MOD.DS.LPB.DS.JS.DS ?>" class="btn btn-primary">JAVASCRIPT</a></span>                                           </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col justify-content-center">
                                    <div class="card" style="height: 24rem;">
                                        <svg class="bi d-block mx-auto mt-4 mb-1" width="64" height="64"><use xlink:href="#database"></use></svg>
                                        <div class="card-body">
                                            <h2 class="card-title color-white">Module : LDB</h2>
                                            <p class="card-text">Les bases de données</p>
                                            <a href="<?= $_SESSION['R'].MOD.DS.LDB.DS ?>" class="btn btn-primary">Base de données</a>                                                                                     
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div> <!--col-md-10-->
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
