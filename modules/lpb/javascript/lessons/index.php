<?php 
    require_once('../../../../boot.php');  
    $_SESSION['R'] = R4;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = JS;      
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
                        <h1 class="mt-5 text-center">Javascript : La liste des leçons</h1>
                        
                        <div class="mt-5">
                            <?php 
                                //DEBUG// DBGPrint(listCourses(), PR, 'Liste des cours');
                                echo getHtmlCoursesList(listCourses(), JS);                             
                            ?>

                            <fieldset class="red border rounded p-2">
                                <legend class="w-auto">Légende</legend>
                                <hr>
                                <ul>
                                    <li>FD : Les Fondamentaux</li>
                                    <li>OBJ : Les Objets</li>
                                    <li>TYP : Les types de données</li>
                                    <li>ADV : Notions avancées</li>
                                    <li>NAV : Navigateur : Document, Evènements, Interfaces</li>
                                </ul>
                            </fieldset>
                        </div>
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