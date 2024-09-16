<?php 
    require_once('boot.php'); 
    $_SESSION['R'] = R0;
    $_SESSION['PAGE'] = 'home';   
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
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
                        <p class="text-center mt-5">
                            Bienvenue sur l'application LPB - LDB 2025
                        </p>
                        <p>
                            <img src="assets/img/programmation.jpg" class="img-fluid" alt="Programmation">
                        </p>
                        
                        <h1 class="mt-5 text-center">LPB : Langages de programmation - Les bases (80h)</h1>
                        <h2 class="mt-5">Objectifs du module</h2> 
                        
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
                        </ol>                     
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].DS.'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
