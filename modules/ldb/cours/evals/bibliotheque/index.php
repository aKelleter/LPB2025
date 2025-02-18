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
                            Une bibliothèque scolaire souhaite informatiser la gestion de ses prêts de livres. Chaque élève peut emprunter des livres et doit les rendre dans un délai de 15 jours. Le bibliothécaire doit pouvoir suivre les emprunts et savoir quels livres sont disponibles. <br>
                            Travail demandé : 
                        </p>                            
                            <h6>Analyse du contexte</h6>
                            <ul>
                                <li>Identifier les entités principales (ex : livre, élève, emprunt…).</li>
                                <li>Déterminer les relations entre ces entités (ex : un élève peut emprunter plusieurs livres…).</li>
                                <li>Définir les cardinalités.</li>
                            </ul>

                            <h6>Création du modèle conceptuel de données (MCD)</h6>
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
                                <li>Élève : id_eleve, nom, prénom, classe</li>
                                <li>Livre : id_livre, titre, auteur, année_publication</li>
                                <li>Emprunt : id_emprunt, date_emprunt, date_retour, id_eleve (FK), id_livre (FK)</li>
                            </ul>

                            <h6>Exemple de relations :</h6>
                            <ul>
                                <li>Un élève peut emprunter plusieurs livres, mais un livre ne peut être emprunté que par un seul élève à la fois.</li>
                                <li>Un livre appartient à une catégorie.</li>
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