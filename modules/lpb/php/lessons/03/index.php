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

                        <?= getHtmlBlocWhatCodeDoes("Utiliser echo ou print dans votre code"); ?>

                        <?= getHtmlBlockSourceCode($code_source, $files[0]); ?>
                        
                        <?php 
                            $renderStr = "Une première ligne <br>
                                        Une seconde ligne juste en-dessous<br>
                                        un deux trois quatre cinq six sept huit neuf dix<br>
                                        555<br>
                                        555<br>
                                        Un affichage avec print<br>
                                        Appel de echo avec des parenthèses ()<br>
                                        Appel de print avec des parenthèses ()<br>
                                        Aujourd'hui<br>
                                        Bonjour \"John\", il est l'heure de se lever<br>
                                        My first article<br>
                                        My second article<br>
                                        ";
                            echo getHtmlBlockRendering($renderStr);
                        ?>

                        <?php
                            $explanations = [
                                "echo et print sont des structures PHP qui permettent d'afficher du texte ou des variables dans une page web.",
                                "echo est plus rapide que print, car il n'y a pas de valeur de retour.",
                                "echo peut afficher plusieurs éléments séparés par des virgules, alors que print ne peut afficher qu'un seul élément.",
                                "echo et print peuvent être utilisés avec des parenthèses, mais on ne le fait pas.",
                                "Pour afficher des appostrophes <code>'</code> avec une chaîne délimitée par des appostrophes <code>'</code>ma chaine<code>'</code> (single quotes), on utilise le caractère d'échappement '<code>\</code>'.",
                                "Pour afficher des guillemets <code>\"</code> avec une chaîne délimitée par des guillemets <code>\"</code>ma chaine<code>\"</code> (double quotes), on utilise le caractère d'échappement '<code>\</code>'.",
                                "Pour afficher du code HTML et éviter ainsi de nombreux échappements avec l'antislash '<code>\</code>', préférez délimiter vos chaînes avec des single quotes <code>'</code> (apostrophes) plutôt que des double quotes <code>\"</code>.",                               
                                "On peut également utiliser la syntaxe <code>heredoc</code> pour afficher du code HTML, XML, etc."
                            ];
                            echo getHtmlBlockExplanations($explanations);
                        ?>

                        <?php
                            $ressources = [
                                ['url' => 'https://www.php.net/manual/fr/function.echo.php', 'title' => 'Source : php.net : echo'],
                                ['url' => 'https://www.php.net/manual/fr/function.print.php', 'title' => 'Source : php.net : print'],
                                ['url' => 'https://www.php.net/manual/fr/language.types.string.php', 'title' => 'Source : php.net : Types de chaînes'],
                                ['url' => 'https://www.php.net/manual/fr/language.types.string.php#language.types.string.syntax.heredoc', 'title' => 'Source : php.net : Syntaxe heredoc']
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