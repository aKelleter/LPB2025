<?php 
    require_once('../../../boot.php');  
    $_SESSION['R'] = R3; 
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
                        <h1 class="mt-5 text-center">Le Javascript</h1>                       
                        <h3 class="mt-5">1. Introduction au JavaScript</h3>
                        <p> 
                            Le JavaScript est un langage de programmation essentiel dans le développement web. Créé en 1995 par Brendan Eich, il a pour but 
                            initial de rendre les pages web interactives. Aujourd'hui, JavaScript est un langage polyvalent utilisé à la fois côté client 
                            (navigateur) et côté serveur grâce à des environnements comme Node.js.
                        </p>
                        <h3 class="mt-5">2. Pourquoi apprendre le JavaScript ?</h3>
                        <ul>
                                <li><b>C'est un langage universel</b> : Le JavaScript est présent sur tous les navigateurs web modernes, ce qui en fait un 
                                langage incontournable pour le développement web.</li>
                                <li><b>Sa polyvalence</b> : Il peut être utilisé pour :</li>
                                    <ul>
                                        <li>Créer des interfaces interactives (animations, formulaires dynamiques, etc.).</li>
                                        <li>Communiquer avec des serveurs via des requêtes HTTP (AJAX).</li>
                                        <li>Développer des applications web complètes grâce à des frameworks comme React, Angular, ou Vue.js.</li>
                                        <li>Créer des applications mobiles et de bureau.</li>
                                    </ul>
                                <li><b>Sa facilité d’apprentissage</b> : Sa syntaxe simple et ses résultats rapides en font un bon point de départ pour 
                                les débutants.</li>
                        </ul>
                        <h3 class="mt-5">3. Les caractéristiques principales de JavaScript</h3>
                        <ul> 
                            <li><b>Interprété</b> : Le code JavaScript est exécuté directement par le navigateur sans étape de compilation.</li>
                            <li><b>Orienté objet et fonctionnel</b> : JavaScript prend en charge les paradigmes de programmation orientée objet et fonctionnelle.</li>
                            <li><b>Événementiel</b> : Il réagit aux actions de l’utilisateur (clics, saisies, survols, etc.).</li>
                            <li><b>Asynchrone</b> : JavaScript gère les opérations asynchrones (comme les appels réseau) via des mécanismes tels que les promises et async/await.</li>
                        </ul>
                        <h3 class="mt-5">4. Les outils pour commencer avec JavaScript</h3>
                        <ul> 
                            <li><b>Navigateur web</b> : Tout navigateur moderne (comme Chrome, Firefox ou Edge) possède une console JavaScript intégrée pour tester du code.</li>
                            <li><b>Éditeur de code</b> : Visual Studio Code est un excellent choix pour écrire et organiser vos scripts ou tout autre éditeur ou IDE.</li>
                            <li><b>Tutoriels interactifs</b> : Des plateformes comme <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript" target="_blank">MDN Web Docs</a>, <a href="https://www.freecodecamp.org/" target="_blank">FreeCodeCamp</a>, 
                                ou <a href="https://www.codecademy.com" target="_blank">Codecademy</a> proposent des ressources adaptées.</li>
                        </ul>
                        <h3 class="mt-5">5. Les limites de JavaScript</h3>
                        <ul> 
                            <li>Peut être complexe à déboguer, surtout pour les débutants.</li>
                            <li>Manque de typage statique, bien qu’un outil comme TypeScript puisse résoudre ce problème.</li>
                        </ul>
                        <h3 class="mt-5">6. Conclusion</h3>
                        <p> 
                            Le JavaScript est un langage puissant et accessible, idéal pour créer des applications interactives. En maîtrisant 
                            ses bases, vous serez en mesure de construire des projets concrets et de vous ouvrir à des concepts plus avancés 
                            comme les frameworks modernes et le développement backend.
                        </p>
                        <p>

                            💡 Conseil : Essayez de pratiquer régulièrement en réalisant de petits projets, comme un jeu de devinettes ou une 
                            calculatrice simple. C’est en codant que vous progresserez le plus et ce quelque soit le language de programmation !
                        </p>
                        
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