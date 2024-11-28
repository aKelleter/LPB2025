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
                                        <p class="inline pad0 marge0">
                                            <svg class=" mt-4 mb-1" width="64" height="64"><use xlink:href="#phpfile"></use></svg>
                                            <svg class=" mt-4 mb-1" width="64" height="64"><use xlink:href="#jsfile"></use></svg>
                                        </p>
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
                        <h1 class="mt-5 text-center"><span class="red">MODULE LPB</span> : Langages de programmation - Les bases (80h)</h1>
                        <h2 class="mt-5">Objectifs du module</h2> 
                        <p>
                            <img src="assets/img/programmation.jpg" class="img-fluid" alt="Programmation">
                        </p>                        
                        <h3> Les objectifs généraux</h3>                        

                        <ol>        
                            <li>Connaître les concepts, les niveaux, les paradigmes, la syntaxe générale, les forces et les faiblesses des langages couramment utilisés dans les applications web.</li>
                            <li>Introduction à la programmation : logique de programmation, concepts de base de la programmation procédurale, éléments/outils.</li> 
                            <li>Introduction aux aides à la programmation : extension des fonctionnalités d’un langage par les librairies et les frameworks.</li> 
                            <li>Connaître et comprendre les concepts de base des langages de programmation orientés web.</li>
                            <li>Mettre en œuvre les concepts de base de la programmation procédurale pour construire des pages web.</li>
                            <li>Apprendre les bonnes pratiques à adopter en matière de méthodes d’apprentissage continu, telle que l’organisation d’une veille technologique, etc.</li>
                        </ol>
                        

                        <h2 class="mt-5">Contenu du module</h2>                        
                        <ol>    
                            <li>Introduction aux concepts de la programmation<li> 
                                <ol>
                                    <li>Les niveaux de langages (bas niveau, haut niveau).</li>
                                    <li>Les langages rencontrés couramment dans le développement web : leurs domaines d’application, leurs avantages et inconvénients, les interactions possibles (ex. : PHP, JavaScript, Java, Python, Ruby, etc.).</li> 
                                    <li>Logique de programmation et syntaxe, les points communs entre les langages :</li>
                                    <ul>
                                        <li>variables</li>
                                        <li>constantes</li>
                                        <li>structures de contrôle</li>
                                        <li>commentaires</li>
                                        <li>arrays</li>
                                        <li>opérateurs</li>
                                    </ul>
                                </ol>
                            </li>
                            <li>Introduction à la programmation procédurale en PHP :  
                                <ol>
                                    <li>Utilisations du PHP à l’heure actuelle.</li>
                                    <li>Logique de programmation.</li>
                                    <li>Syntaxe du PHP.</li>
                                    <li>Utilisation du PHP avec une base de données.</li>
                                    <li>Afficher une page HTML via PHP.</li>
                                    <li>Réaliser un formulaire via PHP (méthodes GET & POST).</li>
                                    <li>Gestion de la sécurité en PHP.</li>
                                    <li>Les versions de PHP et leurs impacts sur le développement.</li>
                                    <li>Les autres paradigmes dans la programmation : forces, faiblesses et utilisation (object oriented, functional, etc.).</li>
                                </ol> 
                            </li>
                            <li>Introduction à la programmation JavaScript :  
                                <ol>
                                    <li>Les points communs et les différences de logique/syntaxe avec PHP.</li>
                                    <li>Les utilisations actuelles du JS.</li>
                                    <li>Introduction au JS.</li>
                                    <li>Introduction à la librairie jQuery.</li>
                                </ol>
                            </li>   
                        </ol>

                        <h2 class="mt-5">Evaluation</h2> 
                        <p>L’évaluation se fera au moyen d’exercices pratiques réguliers et d’un examen de fin de module.</p>
                        <hr>

                        <h1 class="mt-5 text-center"><span class="red">MODULE LDB</span> : Langages de base de données - Les bases (48h)</h1>
                        <h2 class="mt-5">Objectifs du module</h2> 
                        <p>
                            <img src="assets/img/databases.jpg" class="img-fluid" alt="Programmation">
                        </p>
                        <h3> Les objectifs généraux</h3>
                        <ol>        
                            <li>Connaître et comprendre le fonctionnement des familles de base de données web populaires.</li>
                            <li>Mettre en œuvre l’architecture d’une base de données simple. </li> 
                            <li>Connaître et utiliser les fonctions courantes d’une base de données (types de données, commandes, etc.). </li> 
                            <li>Installer et maintenir les données d’une base de données simple.  Initier les comptes utilisateurs et mettre en place les bonnes pratiques en matière de sécurité. </li>
                            <li>Apprendre les bonnes pratiques à adopter en matière de méthodes d’apprentissage continu, telle que l’organisation d’une veille technologique, etc.</li>                            
                        </ol> 
                        
                        <h2 class="mt-5">Contenu du module</h2> 
                        <ol>
                            <li>Introduction aux SGBD et à leur fonctionnement</li>
                            <li>Introduction à l’architecture DB relationnelle : 
                                <ol>
                                    <li>Importer des données depuis des sources mixtes et les connecter entre elles (ex. : CSV, MSSQL, MySQL, etc.)</li>
                                </ol>                               
                                <li>Les bonnes pratiques et les formes normales</li>
                                <li>Modèle conceptuel et logique de données</li>
                                <li>Utiliser un logiciel de visualisation graphique (ex. : Oracle Workbench)</li>
                                <li>Les types de données (int, var, blob, date, etc.)</li>
                                <li>Manipulations simples (sous MySQL) : sélectionner, trier, écrire, effacer, mettre à jour, construire des index, réaliser des jointures, etc.</li>
                                <li>Initiation à la sécurité et les sauvegardes</li>
                                <li>Se connecter à une base de données à distance (PHPMyAdmin, HeidiSQL, Oracle Workbench) : réaliser des sauvegardes, des mises à jour, etc.</li>
                            </li>
                        </ol>

                        <h2 class="mt-5">Evaluation</h2> 
                        <p>L’évaluation se fera au moyen d’exercices pratiques réguliers et d’un examen de fin de module.</p>
                    </div> <!--col-md-10-->
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
