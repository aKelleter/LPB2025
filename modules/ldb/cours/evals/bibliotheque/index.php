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
                        <h1 class="mt-5 text-center">Evaluation : <span class="color_dark_green"> Créer un MLD et un MCD pour le projet : Bibliothèque</span></h1>  
                                            
                        <h4>Exercice : Gestion d’une bibliothèque scolaire</h4>
                        <h5>1. Présentation :</h5>    
                        <p>
                            L’objectif est de concevoir un modèle conceptuel de données (MCD) puis d’en dériver le modèle logique de données (MLD). <br>
                            Contexte : 
                        </p>
                        <p>
                            Vous êtes chargé(e) de créer une base de données pour gérer une bibliothèque scolaire. La bibliothèque contient des livres, des emprunteurs (élèves ou professeurs), et suit les emprunts. Voici les règles :
                        </p>                            
                            <h4>Contexte</h4>
                            <ul>
                                <li>Un livre peut être emprunté par un seul emprunteur à la fois (relation 1:1 entre un livre et son emprunt actuel).</li>
                                <li>Un emprunteur peut emprunter plusieurs livres au fil du temps (relation 1:N entre emprunteurs et emprunts).</li>
                                <li>Certains livres appartiennent à des catégories (comme "Science", "Littérature"), et une catégorie peut contenir plusieurs livres (relation 1:N entre catégories et livres).</li>
                            </ul>

                            <h4>Objectif</h4>
                            <p>
                                Vous devrez concevoir un modèle de données pour gérer cette bibliothèque. Pour cela, vous devrez :
                            </p>
                            <ul>
                                <li>Créer les tables avec les bonnes cardinalités.</li>
                                <li>Ajouter des contraintes (clés primaires, clés étrangères).</li>
                                <li>Insérer des données pour tester les relations.</li>
                            </ul>

                            <h4>Création du modèle conceptuel de données (MCD)</h4>
                            <ul>
                                <li>Représenter les entités, leurs attributs et les relations entre elles sous forme d’un diagramme entité-association.</li>
                                <li>Indiquer les contraintes (clé primaire, cardinalités…).</li>
                            </ul>

                            <h6>Transformation en modèle logique de données (MLD)</h6>
                            <ul>
                                <li>Traduire le MCD en tables relationnelles.</li>
                                <li>Définir les clés primaires et étrangères.</li>
                            </ul>
                        </p>
                        

                        <h5>2. Indications :</h5>

                            <h6>Exemples d’attributs :</h6>
                            <ul>
                                <li>
                                    <st-r>Categories</st-r> : contient les catégories de livres. <br>
                                    Colonnes : id_categorie (clé primaire), nom_categorie.
                                </li>

                                <li>
                                    <st-r>Livres</st-r> : contient les livres de la bibliothèque. <br>
                                    Colonnes : id_livre (clé primaire), titre, id_categorie (clé étrangère vers Categories).
                                </li>

                                <li>
                                    <st-r>Emprunteurs</st-r> : contient les personnes qui empruntent. <br>
                                    Colonnes : id_emprunteur (clé primaire), nom.
                                </li>
                                <li>
                                    <st-r>Emprunts</st-r> : suit les emprunts actuels. <br>
                                    Colonnes : id_emprunt (clé primaire), id_livre (clé étrangère vers Livres, unique pour garantir 1:1), id_emprunteur (clé étrangère vers Emprunteurs), date_emprunt.
                                </li>
                                
                            </ul>
                            
                            
                        <h5>3. Livrables attendus :</h5>
                        <ul>
                            <li>Un MCD sous forme de diagramme.</li>
                            <li>Un MLD sous forme de script SQL ou de représentation tabulaire.</li>    
                        </ul>                            
                            
                        <p>
                           <b>Happy brainstorming ! :)</b>
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