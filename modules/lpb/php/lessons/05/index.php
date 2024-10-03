<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;     
    
    // Chargement du/des fichier(s)
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
                        <h1 class="mt-5 text-center">Leçon 05 : <span class="color_dark_green">Les types des variables.</span></h1>  
                        <?= getHtmlSubMenu('04', '06'); ?>    
                        <?php
                        $wcd = "
                                Nous allons voir les différents types de variables en PHP.<br>
                                Suite à ces découvertes, allons essayé de déterminer quel est le meilleur type de variable pour stocker une donnée.<br>

                                <p> Les variables peuvent être de différents types : entier, chaîne de caractères, booléen, tableau, etc.<br>
                                 PHP est un langage de programmation faiblement typé, ce qui signifie que vous n'avez pas besoin de déclarer explicitement le type de variable que vous créez.<br>
                                 PHP détermine automatiquement le type de variable en fonction de la valeur que vous lui attribuez.<br>
                                 Cependant, il est possible de forcer le type de variable en utilisant des fonctions de conversion de type.
                                </p>

                                <p>
                                    Voici quelques types de variables courants en PHP :
                                <ul>
                                    <li> <b>integer</b> : entier </li>
                                    <li> <b>float</b> : nombre à virgule flottante</li>
                                    <li> <b>string</b> : chaîne de caractères</li>
                                    <li> <b>boolean</b> : booléen</li>
                                    <li> <b>array</b> : tableau / iterable</li>
                                    <li> <b>object</b> : objet</li>
                                    <li> <b>null</b> : valeur nulle</li>
                                    <li> <b>resource</b> : ressource</li>
                                    <li> <b>callable</b> : fonction callback ou fonction de rappel</li>
                                    <li> ... mixed, void, ...</li>
                                </ul>
                                </p>
                                
                                Pour connaître le type d'une variable, vous pouvez utiliser la fonction <code>gettype()</code> ou la fonction <code>var_dump()</code>.<br>
                                La fonction gettype() renvoie le type de la variable passée en argument.<br>
                                La fonction var_dump() affiche des informations structurées sur une ou plusieurs expressions, y compris le type et la valeur de la variable.<br>
                               ";

                        echo getHtmlBlocWhatCodeDoes($wcd); 
                        ?>

                        <?= getHtmlBlockSourceCode($source_code, FILENAME_SOURCE_CODE); ?>
                        
                        <?php 
                            $renderStr = "
                                            Value : 10 -> integer<br>
                                            Value : 10.5 -> integer<br>
                                            Value : Hello, World! -> string<br>
                                            bool(true) Value : -> boolean<br>
                                            array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } Value : -> array<br>
                                            object(stdClass)#1 (0) { } Value : -> object<br>
                                            NULL Value : -> NULL<br>
                                            resource(3) of type (stream) Value : -> resource<br>
                                            My sister is not a boy :)<br>
                                            object(Closure)#2 (0) { } Value : -> object<br>
                                            array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } Value : -> array<br>
                                            int(600) Value : -> integer<br>
                                            bool(true) Value : -> integer<br>
                                            string(2) \"10\" Value : -> string<br>
                                            int(10) Value : -> integer<br>

                                        ";
                            echo getHtmlBlockRendering($renderStr);
                        ?>

                        <?php
                        
                            $explanations = [
                                "Les différents types de variables nous permettent de stocker différents types de données.",
                                "Nous choisirons le type de variable en fonction de la donnée à stocker.",
                                "Nous pouvons, si besoin, vérifier le type d'une variable avec les fonctions gettype() ou var_dump().",
                                "Le PHP est très permissif sur les types de variables, mais il est possible de forcer le type de variable en utilisant des fonctions de conversion de type (type casting).", 
                                                              
                            ];
                            echo getHtmlBlockExplanations($explanations);
                        ?>

                        <?php
                            $ressources = [
                                ['url' => 'https://www.php.net/manual/fr/language.types.intro.php', 'title' => 'Php.net : Les variables - les types'],
                                ['url' => 'https://www.php.net/manual/fr/language.types.type-juggling.php#language.types.typecasting', 'title' => 'Php.net : Les variables - le type casting'],
                                

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