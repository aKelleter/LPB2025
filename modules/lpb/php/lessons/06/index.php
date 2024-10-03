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
                        <h1 class="mt-5 text-center">Leçon 06 : <span class="color_dark_green">Les constantes.</span></h1>  
                        <?= getHtmlSubMenu('05', '07'); ?>   
                        <?php
                        $wcd = "
                                <p>
                                Une constante est un identifiant ou un nom qui représente une valeur simple. Les constantes, tout comme les variables, 
                                vont donc être des conteneurs qui vont nous servir à stocker une valeur. 
                                Cependant, à la différence des variables, la valeur stockée dans une constante ne va pas pouvoir être modifiée : 
                                elle va être « constante » (sauf dans le cas des constantes magiques dont nous allons reparler plus tard). 
                                </p>
                                <p>        
                                Notez également que les constantes vont par défaut être toutes accessibles dans tout le script : 
                                on va pouvoir les définir n’importe où dans le script et pouvoir y accéder depuis n’importe quel autre endroit du script.         
                                Notez de plus que par convention, les constantes seront toujours écrites en majuscules pour bien les différencier des autres objets
                                du langage PHP. 
                                </p>        
                                <p>        
                                Pour définir une constante en PHP, nous allons pouvoir utiliser la fonction <code>define()</code> ou le mot clef <code>const</code>. 
                                En utilisant le mot clef <code>const</code>, vous devez noter que seules des données de type <code>string</code>, <code>integer</code>, <code>float</code>, <code>boolean</code> et <code>array</code> 
                                (dans les dernières versions de PHP) vont pouvoir être stockées 
                                Vous devriez toujours déclarer vos constantes en majuscules.  
                                A la différence des variables, nous ne devrons pas préfixer le nom d’une constante avec le signe <code>$</code>. 
                                </p>
                                <p>
                                    <strong><u>LES CONSTANTES PREDEFINIES / MAGIQUES</u></strong>
                                </p>
                                <p>
                                    En plus des constantes que nous allons pouvoir définir nous-mêmes, PHP propose un certain nombre 
                                    de constantes prédéfinies qui vont nous permettre de récupérer des informations sur le script 
                                    en cours d’exécution.
                                    <br>
                                    Les constantes magiques sont des constantes prédéfinies qui vont être remplies par PHP à chaque fois 
                                    que le script va être exécuté. Ces constantes vont nous permettre de récupérer des informations sur le script 
                                    en cours d’exécution.
                                </p>   
                                <p>
                                    <u>Les constantes prédéfinies</u><br>
                                    PHP fournit un grand nombre de constantes prédéfinie. Certaines constantes sont définies par différentes extensions, 
                                    et ne seront présentes que si ces extensions sont compilées avec PHP, ou bien si l'extension a été chargée 
                                    dynamiquement. 
                                </p>
                                
                                <p>    
                                    <u>Les constantes magiques telles que :</u><br>
                                    __FILE__ : Le chemin complet et le nom du fichier en cours d’exécution. Si utilisé à l’intérieur d’un include, 
                                                le nom du fichier inclus est retourné.<br>
                                    __DIR__ : Le nom du répertoire du fichier. Si utilisé à l’intérieur d’un include, le nom du répertoire de l’inclusion est retourné.<br>
                                    __LINE__ : Le numéro de la ligne courante dans le fichier.<br>
                                    __FUNCTION__ : Le nom de la fonction.<br>
                                    
                                    __CLASS__ : Le nom de la classe. Le nom de la classe inclut le nom de l’espace de noms dans lequel la classe est définie (par exemple A\B\C).<br>
                                    __METHOD__ : Le nom de la méthode de la classe.<br>
                                    __NAMESPACE__ : Le nom de l’espace de noms courant.<br>
                                    __TRAIT__ : Le nom du trait. Le nom du trait inclut le nom de l’espace de noms dans lequel le trait est défini (par exemple A\B\C).<br>                                    
                                </p>
                                <p>
                                    Pour accéder à une constante magique, nous allons pouvoir utiliser le nom de la constante précédé de deux underscores. 
                                    Par exemple, pour accéder à la constante magique __FILE__, nous allons devoir écrire <code>__FILE__</code>.
                                </p>
                                <p>
                                    Les constantes magiques vont notamment être utiles pour récupérer des adresses de fichiers et les utiliser dans 
                                    des fichiers de configuration ou pour effectuer des actions de débogage.
                                </p>    

                               ";

                        echo getHtmlBlocWhatCodeDoes($wcd); 
                        ?>

                        <?= getHtmlBlockSourceCode($source_code, FILENAME_SOURCE_CODE); ?>
                        
                        <?php 
                            $renderStr = "
                                            Le jeu s'appelle Super Mario Odyssey<br>
                                            La valeur de PI est 3.14159<br>
                                            Chemin du fichier : /Users/alainkelleter/Sites/www/LPB2025/modules/lpb/php/lessons/06/1.constantes.php<br>
                                            Numéro de ligne de l'instruction : 13<br>
                                            Nom du répertoire : /Users/alainkelleter/Sites/www/LPB2025/modules/lpb/php/lessons/06<br>
                                            Nom de la fonction : maFonction<br>
                                            PHP Version : 8.3.8<br>
                                            PHP OS : Darwin<br>
                                            PHP Extension : /opt/homebrew/Cellar/php/8.3.8/lib/php/20230831<br>
                                            PHP Le plus petit entier : -9223372036854775808<br>
                                            PHP Le plus grand entier : 9223372036854775807<br>                          

                                        ";
                            echo getHtmlBlockRendering($renderStr);
                        ?>

                        <?php
                        
                            $explanations = [
                                "Les constantes sont des conteneurs qui stockent des valeurs qui ne peuvent pas être modifiées.",
                                "On peut créer des constantes avec la fonction <code>define()</code> ou le mot clef <code>const</code>.",
                                "Les constantes sont accessibles partout dans le script.",
                                "Les constantes sont écrites en majuscules. C'est une convention pas une obligation. Mais il faut le faire !",
                                "Elles commencent par le signe <code>$</code>.",
                                "Les constantes magiques sont des constantes prédéfinies qui sont remplies par PHP à chaque fois que le script est exécuté.",
                                "Il existe des constantes prédéfinies qui permettent de récupérer des informations sur le script en cours d'exécution."
                                                              
                            ];
                            echo getHtmlBlockExplanations($explanations);
                        ?>

                        <?php
                            $ressources = [
                                ['url' => 'https://www.php.net/manual/fr/language.constants.php', 'title' => 'Php.net - Les constantes'],
                                ['url' => 'https://www.php.net/manual/fr/language.constants.predefined.php', 'title' => 'Php.net - Les constantes prédéfinies'],
                                ['url' => 'https://www.php.net/manual/fr/language.constants.magic.php', 'title' => 'Php.net - Les constantes magiques']
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