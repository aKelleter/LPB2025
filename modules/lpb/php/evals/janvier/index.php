<?php 
    require_once('../../../../../boot.php');  
    $_SESSION['R'] = R5;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = PHP;      
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
                        <h1 class="mt-5 text-center">Evaluation : <span class="color_dark_green">Janvier</span></h1>  

                        <h3>Présentation</h3>
                        <p>
                            L'évaluation du mois de janvier consiste à résoudre et proposer une solution pour une série de 
                            <b class="red">5</b> petits projets :
                        </p>
                        <ol>
                            <li><a href="#citation">Un générateur de citation aléatoire</a></li>
                            <li><a href="#convertisseur">Convertisseur d'unités</a></li>
                            <li><a href="#contact">Un formulaire de contact</a></li>
                            <li><a href="#blog">Un petit blog statique</a></li>
                            <li><a href="#amazaune">Magasin Amazaune</a></li>
                        </ol>
                        <h4 class="red" id="citation">1. Projet : Un générateur de citation aléatoire</h4>
                        <p>
                            <b>Objectif</b> : Créer une page qui affiche une citation aléatoire à chaque rechargement. <br>
                            <b>Concepts pratiqués</b> :
                        </p>
                        <ul>
                           <li>Les Variables (chaîne de caractères)</li>
                           <li>Les Tableaux (stockage des citations)</li>
                           <li>Les Boucles (pour parcourir le tableau de citations)</li>
                           <li>Les Fonctions internes au PHP (pour générer un nombre aléatoire)</li>
                           <li>Utilisation de la fonction <cite>htmlspecialchars()</cite> pour neutraliser certains caractères et sécuriser les données ou les affichages</li>
                        </ul>
                        <p>
                            <b>Informations</b> : <br>
                            - Voici un exemple de tableau de citations à utiliser (vous pouvez proposer le vôtre ou en ajouter d'autres :)) : <br>                            
                            <textarea class="code-php">
                                    $citations = [
                                        "La vie est un mystère qu'il faut vivre, et non un problème à résoudre. - Gandhi",
                                        "Le plus grand risque est de ne prendre aucun risque. - Mark Zuckerberg",
                                        "Le succès c'est tomber sept fois, se relever huit. - Proverbe japonais",
                                        "Le seul endroit où le succès précède le travail est dans le dictionnaire. - Vidal Sassoon",
                                        "Le succès est la somme de petits efforts répétés jour après jour. - Robert Collier ",
                                        "La persévérance est la clé du succès. - Mazouz Hacène",
                                        "La connaissance s'acquiert par l'expérience, tout le reste n'est que de l'information. - Albert Einstein",
                                        "L'échec est une opportunité de recommencer plus intelligemment. - Henry Ford",
                                    ];
                            </textarea>
                            - Vous allez devoir sélectionner une citation aléatoire à chaque rechargement de la page pour ensuite l'afficher. <br>
                            - Séparez au maximum la logique de votre code de l'affichage (structure HTML avec du code PHP pour afficher ex.: <cite>&lt;?= $texte ?&gt;</cite>). <br>
                            - Vous pouvez utiliser la fonction <cite>array_rand()</cite> ou la fonction <cite>rand()</cite> pour générer un index aléatoire. <br>
                            - Vous pouvez ajouter un bouton pour recharger une nouvelle citation. <br>
                        </p>
                        <p>
                            <b>Exemple</b> : <br>
                            <div class="d-flex justify-content-center">
                                <img class="screensav" src="<?= $_SESSION['R'].ASSETS.DS.A_IMG.DS.'citations.png'?>" alt="citations">                 
                            </div>
                        </p>                                          
                        <p>
                           <b>Happy coding ! :)</b>
                        </p>
                        <hr>

                        <h4 class="red" id="convertisseur">2. Projet : Convertisseur d'unités </h4>
                        <p>
                            <b>Objectif</b> : Créer un formulaire où l'utilisateur entre une valeur (par ex. en kilomètres) et obtient la conversion 
                            dans une autre unité (par ex. miles). <br>
                            <b>Concepts pratiqués</b> :
                            <ul>
                                <li>Les Opérateurs</li>
                                <li>Les Switch case pour gérer les différentes opérations</li>
                                <li>Les Formulaires HTML et gestion des entrées utilisateur </li>
                                <li>Les Fonctions (pour convertir les valeurs)</li>
                                <li>Les Conditions - tests des valeurs</li>
                                <li>Utilisation de la fonction <cite>htmlspecialchars()</cite> pour neutraliser certains caractères et sécuriser les données ou les affichages</li>

                            </ul>
                            <b>Types de conversions gérés</b> dans les 2 sens :
                            <ul>
                                <li>Kilomètres ↔ Miles</li>
                                <li>Celsius ↔ Fahrenheit</li>
                                <li>Kilogrammes ↔ Livres</li>
                            </ul> 
                            Les formules de conversion sont les suivantes : <br>
                            <ul>
                                <li>Kilomètres → Miles : valeur * 0.621371 </li>
                                <li>Miles → Kilomètres : valeur / 0.621371</li>
                                <li>Celsius → Fahrenheit : (valeur * 9 / 5) + 32</li>
                                <li>Fahrenheit → Celsius : (valeur - 32) * 5 / 9</li>
                                <li>Kilogrammes → Livres : valeur * 2.20462</li>
                                <li>Livres → Kilogrammes : valeur / 2.20462</li>
                            </ul>
                            <b>Structure</b> :
                            <ul>
                                <li>Un formulaire permet d’entrer une valeur et de sélectionner un type de conversion.</li>
                                <li>Un test qui vérifie que la valeur n'est pas vide et que l'on a un type de conversion.</li>
                                <li>Une fonction <b>convertir</b> qui réalise la conversion en fonction du type choisi.</li>
                                <li>Les résultats sont affichés avec un message simple et efficace.</li>
                            </ul> 
                            <b>Validation</b> :
                            <ul>
                                <li>Vérification que la valeur saisie est un nombre et que la conversion sélectionnée est valide.</li>
                            </ul> 
                            Astuces :
                            <ul>                       
                                <li>Utilisez la fonction <cite>number_format()</cite> pour afficher le résultat de la conversion</li>
                                <li>Exploitez les attributs des élements <cite>input</cite></li>
                            </ul> 
                            <b>Exemple</b> : <br>
                            <div class="d-flex justify-content-center">
                                <img  class="screensav" src="<?= $_SESSION['R'].ASSETS.DS.A_IMG.DS.'convertisseur.png'?>" alt="convertisseur">                 
                            </div>

                        </p>
                        <p>
                            <b>Happy coding ! :)</b>
                        </p>
                        <hr>
                        <h4 class="red" id="contact">3. Un formulaire de contact</h4>
                        <b>Objectif</b> : 
                        <br> Créer une page de contact où les utilisateurs peuvent envoyer un message. 
                        <br> L'envoi sera fictif. Vous afficherez un message avec le nom qui aura été encodé dans le formulaire, qui signalera que le message a bien été envoyé.<br>
                        <b>Concepts pratiqués</b> :
                        <ul>
                            <li>Gestion des formulaires ($_POST)</li>
                            <li>Validation des données</li>
                            <li>Utilisation de la fonction <cite>filter_var()</cite> pour valider l'email</li>
                            <li>Utilisation de la fonction <cite>htmlspecialchars()</cite> pour neutraliser certains caractères et sécuriser les données ou les affichages</li>
                            <li>Message de retour après validation</li>
                        </ul>
                        <b>Structure</b> :
                            <ul>
                                <li>Un formulaire permet d’entrer un nom, un e-mail et un message</li>
                                <li>Un test qui vérifie que l'on reçoit le formulaire</li>
                                <li>On vérifie les données reçues</li>
                                <li>Les résultats sont affichés dans une interface simple.</li>
                            </ul> 
                        <p>
                            <b>Exemple</b> : <br>
                            <div class="d-flex justify-content-center">
                                <img class="screensav" src="<?= $_SESSION['R'].ASSETS.DS.A_IMG.DS.'contact.png'?>" alt="contact">                 
                            </div>
                        </p>                                          
                        <p>
                           <b>Happy coding ! :)</b>
                        </p>
                        <hr>

                        <h4 class="red" id="blog">4. Un petit blog statique</h4>
                        <b>Objectif</b> : 
                        <br> Afficher une liste d'articles stockés dans un tableau.  <br>
                        <b>Concepts pratiqués</b> :
                        <ul>
                            <li>Les Variables et tableaux</li>
                            <li>Les Boucles pour afficher les articles</li>
                        </ul>
                        <b>Structure</b> : <br>
                         Très simple <br>
                            <ul>
                                <li>Un tableau d'articles</li>
                                <li>Une boucle pour afficher les articles (ex.: foreach)</li>
                            </ul>
                        <p>
                        Le tableau d'articles : <br>
                        <textarea class="code-php">
                            $articles = [
                                ["titre" => "Bienvenue sur mon blog", "contenu" => "Ceci est le premier article de mon blog !"],
                                ["titre" => "PHP pour débutants", "contenu" => "Apprenez à créer des sites dynamiques avec PHP."],
                                ["titre" => "Contactez-moi", "contenu" => "Laissez vos commentaires pour améliorer ce blog."]
                            ];
                        </textarea>
                        </p>
                        <b>Exemple</b> : <br>
                        <div class="d-flex justify-content-center">
                            <img class="screensav" src="<?= $_SESSION['R'].ASSETS.DS.A_IMG.DS.'blog.png'?>" alt="blog">                 
                        </div>
                        <p>
                           <b>Happy coding ! :)</b>
                        </p>
                        <hr>

                        <h4 class="red" id="amazaune">5. Magasin Amazaune</h4>
                        <b>Objectif</b> : 
                        <br> Simuler l'ajout d'articles à un panier avec un calcul du total. <br>
                        <b>Concepts pratiqués</b> :
                        <ul>
                            <li></li>   
                        </ul>
                        <b>Structure</b> : <br>
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>                       
                        <b>Exemple</b> : <br>
                        <div class="d-flex justify-content-center">
                            <img class="screensav" src="<?= $_SESSION['R'].ASSETS.DS.A_IMG.DS.'amazaune.png'?>" alt="amazaune">                 
                        </div>
                        <p>
                           <b>Happy coding ! :)</b>
                        </p>
                        <hr>

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