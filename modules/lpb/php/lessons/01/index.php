<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;     
    
    // Chargement des fichiers de code source
    $code1_hello = file_get_contents('1.hello-world.php');
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

                        <!-- What the source code does -->
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h6>I. Que va-t-on faire ?</h6>
                                <blockquote class="code-info">                                    
                                    Afficher à l'écran la chaîne de caractères : "Hello World !" 
                                </blockquote>                                                     
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <!-- The source code -->
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h6>II. Le code source :</h6>
                                <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%"><?= $code1_hello ?></textarea>                                
                                <a class="btn btn-primary" href="1.hello-world.php" target="_blank">Exécuter</a>                                
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <!-- Rendering in the browser -->
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 mt-5">  
                                <h6>III. Le rendu dans le navigateur : </h6>  
                                <div class="result">
                                    Hello World !
                                    Hello World !
                                    Hello World !
                                    Hello World !
                                </div>
                            </div>
                        </div>

                        <!-- Explanations -->
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">  
                                <h6>IV. Les explications : </h6>  
                                <div class="explanation">
                                    <ol>
                                        <li>
                                            Pour commencer nous allons entourer le code avec les balises PHP : <code>&lt;?php</code> et <code>?&gt;</code>.
                                            Dans le cas où le ficher ne contient que du code PHP, la balise de fermeture <code>?&gt;</code> est facultative.
                                        </li> 
                                        <li>
                                            Ensuite nous allons appeler une construction du langage ('echo') qui affiche la chaîne de caractères qui est située entre les guillemets (doubles ou simples).
                                        </li>
                                        <li>
                                            Pour terminer, il est également possible d'utiliser les guillemets doubles pour délimiter la chaîne de caractères. 
                                            Nous pouvons même appeler la structure 'echo' avec ou sans les parenthèses.
                                        </li>    
                                    </ol>                                    
                                </div>
                            </div>
                        </div>

                        <!-- Sources -->
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">  
                                <h6>V. Les sources : </h6>  
                                <div class="code-sources">
                                    <a href="//www.php.net/manual/fr/function.echo.php" target="_blank">Source : php.net : echo</a>
                                </div>  
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