<?php 
    require_once('../../../boot.php');  
    $_SESSION['R'] = R3;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;      
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
                        <h1 class="mt-5 text-center">Le langage Php</h1>
                        <p class="text-center">PHP est un langage de programmation très populaire, il est utilisé pour la création de sites Web dynamiques.</p>
                        <h3 class="mt-5">1. Un peu d'histoire</h3>
                        <p> 
                            Le créateur, Rasmus Lerdorf, est un programmeur Groenlandais de nationalité canadienne. Il crée PHP en 1994. Au départ pour analyser 
                            les connexions sur son site Web. Suite à cette première mouture, il réalisera les 2 premières versions du langage. En 1997, deux étudiants, 
                            Andi Gutmans et Zeev Suraski, reprennent le moteur, il en sortira PHP 3.0 puis les outils Zend.
                        </p>

                        <h3>2. Signification</h3>
                        <p>
                            Au tout début, PHP était l'acronyme de : <b class="empha-green">P</b>ersonal <b class="empha-green">H</b>ome <b class="empha-green">P</b>ages 
                            ensuite l'acronymz deviendra :  <b class="empha-green">H</b>ypertext <b class="empha-green">P</b>re <b class="empha-green">P</b>rocessor
                        </p>

                        <h3>3. Syntaxe et structure</h3>
                        <ul>
                            <li>Il est proche du langage C ou du Perl</li>
                            <li>Il était peu structuré au début de son existence</li>
                            <li>On a la possibilité de définir des fonctions et des classes</li>
                            <li>Le langage a de très bonnes performances à partir de PHP 7</li>
                        </ul>

                        <h3>4. Son taux d'utilisation</h3>
                        <ul>
                            <li>A connu un très grand succès, est actuellement en perte de popularité mais reste tout de même très <a href="https://www.tiobe.com/tiobe-index/">utilisé</a> </li>
                            <li>Il est utilisé par de très grands sites/plateformes</li>
                            <li>On trouve beaucoup d'exemples et de codes libres disponible sur le web</li>
                            <li>Des dizaines de millions de sites Web l’utilisent à travers le monde (facebook, Le Monde,...)</li>
                            <li>Les grands CMS (Content Management Systems ou Systèmes de Gestion de Contenus) utilisent PHP, comme :</li>
                            <ul>
                                <li>WordPress</li>
                                <li>Joomla</li>
                                <li>Drupal</li>
                                <li>Magento (e-commerce)</li>
                                <li>Prestashop (e-commerce)</li>
                            </ul>
                            <li>Php possède également son lot de grands Framework tels que:</li>
                            <ul>
                                <li>Symfony</li>
                                <li>Laravel</li>
                                <li>CodeIgniter</li>
                                <li>Zend</li>
                                <li>Yii</li>
                                <li>CakePHP</li>
                                <li>Phalcon</li>
                            </ul>
                        </ul>
                        <p>Plus de 300 millions de sites sont réalisés en PHP à travers le monde !</p>

                        <h3>5. Ses caractéristiques principales</h3>
                        <ul>
                            <li>C'est un langage interprèté</li>
                            <li>Il est orienté objet</li>
                            <li>Il exécute les instructions les unes après les autres de haut en bas</li>
                            <li>Il est multi-plateforme</li>
                            <li>Il est open source</li>
                            <li>Il est très simple à apprendre</li>
                            <li>Il est très bien documenté</li>
                            <li>Il est très bien supporté par la communauté</li>
                            <li>Il est très bien supporté par les hébergeurs</li>
                            <li>Il est très bien supporté par les serveurs Web</li>
                            <li>Il est très bien supporté par les bases de données</li>
                            <li>Il est très bien supporté par les CMS</li>
                            <li>Il est très bien supporté par les Frameworks</li>
                            <li>Compilateur AOT/ByteCode en PHP7 Zend</li>
                            <li>Compilateur JIT pour HHVM Facebook</li>
                            <li>Langage Hack proposé par Facebook</li>            
                        </ul>
                        <p>
                            Il est spécialisé dans la génération de texte ou de documents : HTML, PDF, images, ... <br>
                            Les fichier php possède l'extension <span class="empha-green">.php</span><br>
                            Il est possible d'insérer du code PHP dans du code HTML, pour se faire, il suffit d'ouvrir et de fermer les balises PHP : <br>
                            <span class="empha-green">&lt;?php</span> et <span class="empha-green">?&gt;</span> <br>
                        </p>

                        <h3>6. Fonctionnement</h3>
                        <p>
                            Le serveur Web reçoit une requête HTTP, il va alors chercher le fichier demandé. Si le fichier est un fichier PHP, le serveur va 
                            exécuter le code PHP contenu dans le fichier. Le serveur va alors générer du code HTML qui sera renvoyé au client. Le client 
                            reçoit alors le code HTML généré par le serveur.
                        </p>
                        <p>
                            L’interpréteur lit un fichier source .php,  ensuite il génère un flux de sortie avec les règles suivantes :
                            <ul>
                                <li>toute ligne située à l’extérieur d’un bloc PHP (entre &lt;?php et?&gt;) est recopiée inchangée
                                dans le flux de sortie</li>
                                <li>le code PHP est interprété et génère éventuellement des résultats (affichages) intégrés eux aussi au flux
                                de sortie</li>
                                <li>les erreurs éventuelles donnent lieu à des messages d’erreurs qu’on retrouve également dans
                                le flux de sortie (en fonction de la configuration du serveur)</li>
                                <li>une page html pure (uniquement avec du code HTML) sauvegardée avec l’extension .php, ne sera pas interprètée et renvoyée
                                telle quelle ...</li>
                            </ul>                           
                        </p>
                        <h3>7. Installation</h3>
                        <p>
                            De façon générale on va retrouver PHP sur un serveur Web, mais et surtout en tant que dévemloppeur, il 
                            est possible de l'installer sur un serveur local. Pour cela, il est possible d'installer un serveur
                            local à l'aide de programmes spécialisés tels que : WampServer, <span class="empha-green">Xampp</span>, EasyPHP, Mamp, LAMP, LEMP, etc. 

                            <ul>
                                <li><strong>LAMP</strong> : <span class="empha-green">L</span>inux (OS), <span class="empha-green">A</span>pache (Serveur Web), <span class="empha-green">M</span>ySQL/MariaDB (SGBD), <span class="empha-green">P</span>HP (interprêteur et ses outils)</li>
                                <li><strong>MAMP</strong> : <span class="empha-green">M</span>acOS (OS), le reste des acronymes ayant la même signification</li>
                                <li><strong>WAMP</strong> : <span class="empha-green">W</span>indows (OS), le reste des acronymes ayant la même signification</li>
                            </ul>

                        </p>
                        <h3>8. Les bonnes pratiques</h3>
                        <p>
                            Il est important de respecter certaines règles de bonnes pratiques pour écrire du code propre et lisible.
                            Pour vous aider dans cette tâche il existe des ressources disponibles sur le web, des outils, des Frameworks, des CMS, etc.

                            <ul>
                                <li><a href="https://www.php.net/manual/fr/index.php" target="_blank">La documentation officielle de PHP</a></li>
                                <li><a href="https://phptherightway.com/" target="_blank">PHP - The Right Way</a></li>                                
                                <li><a href="https://phpbestpractices.org/" target="_blank">PHP Best Practices</a></li>
                                <li><a href="https://www.php-fig.org/psr/" target="_blank">PHP Standards Recommendations</a></li>
                            </ul>

                        </p>

                        <h3>Allez, on entre dans le code proprement dit, <a href="lessons/index.php">c'est parti !</a></h3>

                    </div> <!--col-md-10-->
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>