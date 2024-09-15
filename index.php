<?php include_once('app/conf.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home : <?= APP_NAME ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon-180x180.png" />

        <link href="assets/css/styles.css" rel="stylesheet">
        <link href="assets/css/header.css" rel="stylesheet">
        
        <link rel="shortcut icon" href="assets/img/favicon.ico">        
    </head>
    <body>
        <?php include "assets/svg.html"; ?>  
        <?php include "app/header.php"; ?>
        <div class="b-divider"></div>

        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <h1 class="mt-5 text-center">LPB : Langages de programmation - Les bases (80h)</h1>
                        <h2 class="mt-5">Objectifs du module</h2> 
                        <p>
                            <ol>        
                                <li>Connaître les concepts, les niveaux, les paradigmes, la syntaxe générale, les forces et les faiblesses des langages couramment utilisés dans les applications web.</li>
                                <li>Introduction à la programmation : logique de programmation, concepts de base de la programmation procédurale, éléments/outils.</li> 
                                <li>Introduction aux aides à la programmation : extension des fonctionnalités d’un langage par les librairies et les frameworks.</li> 
                                <li>Connaître et comprendre les concepts de base des langages de programmation orientés web.</li>
                                <li>Mettre en œuvre les concepts de base de la programmation procédurale pour construire des pages web.</li>
                                <li>Apprendre les bonnes pratiques à adopter en matière de méthodes d’apprentissage continu, telle que l’organisation d’une veille technologique, etc.</li>
                            </ol>
                        </p>

                        <h2 class="mt-5">Contenu du module</h2> 
                        <p>
                        <ol>    
                            <li>Introduction aux concepts de la programmation<li> 
                                <ol>
                                    <li>Les niveaux de langages (bas niveau, haut niveau).</li>
                                    <li>Les langages rencontrés couramment dans le développement web : leurs domaines d’application, leurs avantages et inconvénients, les interactions possibles (ex. : PHP, JavaScript, Java, Python, Ruby, etc.).</li> 
                                    <li>Logique de programmation et syntaxe, les points communs entre les langages :</li>
                                    <ul>
                                        <li>variables,</li>
                                        <li>constantes,</li>
                                        <li>structures de contrôle,</li>
                                        <li>commentaires ,</li>
                                        <li>arrays,</li>
                                        <li>opérateurs.</li>
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
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php include "app/footer.php"; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
