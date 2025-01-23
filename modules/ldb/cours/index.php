<?php 
    require_once('../../../boot.php');  
    $_SESSION['R'] = R3;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = LDB;
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
                        <h1 class="mt-5 text-center">Le module LDB</h1>
                        <h3>Sommaire</h3>
                        <ol>
                            <li><a href="#presentation">Présentation du cours</a></li>   
                            <li><a href="#objectifs">Objectifs du cours</a></li>   
                            <li><a href="#comprendre">Ce qu'il faut comprendre</a></li>   
                            <li><a href="#bd">Qu'est-ce q'une base de données ?</a></li>   
                            <li><a href="#fonctionnement">Comment fonctionne une base de données ?</a></li>   
                            <li><a href="#types">Les différents types de bases de données</a></li>   
                        </ol>
                        <h3 id="presentation">1. Présentation du cours</h3>
                        <p>
                            Le module <b>LDB</b> (Bases de données - Les bases) devrait vous permettre de <b>concevoir</b>, <b>implanter</b>, <b>alimenter</b> et <b>interroger</b> une base
                            de données (<b>BD</b>/<b>DB</b>), et intégrer cette BD à une application. Le contenu présente
                            tout ce qu’il est nécessaire de maîtriser lorsque l'on conçoit une BD ou que l’on développe des applications qui s’appuient sur une BD.
                        </p>

                        <h3 id="objectifs">2. Objectifs du cours</h3>
                        <ol>
                            <li>Assimiler les principes de base des SGBD relationnels.</li>
                            <li>Aborder la conception des bases de données relationnelles.</li>
                            <li>Aborder la mise en œuvre des bases de données relationnelles.</li>
                            <li>Apprentissage de l'interrogation des bases de données relationnelles.</li>
                        </ol>

                        <h3 id="comprendre">3. Ce qu'il faut comprendre pour utiliser efficacement un SGBD (<b>S</b>ystème de <b>G</b>estion de <b>B</b>ase de <b>D</b>onnées <b>R</b>elationnelles)</h3>
                        <ul>
                            <li>L'architecture</li>
                            <li>La structuration d'un base de données relationnelles</li>
                            <li>L'interrogation</li>
                            <li>La conception</li>
                            <li>Quelques aspects pratiques (schémas, programmation)</li>
                            <li>Les transactions</li>
                        </ul>

                        <h3 id="bd">4. Qu’est-ce qu’une base de données ?</h3>
                        <ul>
                            <li>On les appelle <b>BD</b>, <b>BDD</b> ou <b>DB</b> (en anglais) par commodité : les bases de données ont pour but de stocker, organiser et analyser les données. </li>
                            <li>Elles désignent une collection d’informations organisées pour être facilement consultables, gérables et mises à jour. </li>
                            <li>Ainsi, au sein d’une database, les données sont soumises à une organisation rigoureuse : en ligne, colonnes et tableaux. </li>
                            <li>Elles sont indexées pour être trouvées rapidement via un logiciel informatique, et mises à jour ou supprimées à chaque fois que de nouvelles informations sont ajoutées.</li>
                            <li>
                                Elles sont largement utilisées en entreprises, dans de nombreuses entreprises et à de nombreuses fins : gestion des réservations pour les compagnies aériennes, enregistrements 
                                médicaux dans les hôpitaux, enregistrement légaux dans les compagnies d’assurance...
                            </li>                        
                        </ul>

                        <h3 id="fonctionnement">5. Comment fonctionne une base de données ?</h3>
                        <ul>
                            <li>Les BD sont stockées sous forme de fichiers ou d’ensembles de fichiers. </li>
                            <li>Les BD hiérarchiques traditionnelles sont organisées en triptyque : champs (“fields” : une seule pièce d’information), enregistrements (ensemble de champs) et fichiers (collection d’enregistrements). </li>
                            <li>Les bases de données prédominantes sont aujourd’hui les suivantes : SQL, NoSQL et bases de données cloud. </li>
                            <li>C’est le gestionnaire de BD (ou "database administrator/manage", DBA) qui élabore, implémente, configure voir interroge et/ou modifie les BD. </li>                            
                        </ul>

                        <h3 id="types">6. Les différents types de bases de données</h3>
                        <ul>
                            <li>
                                La BD <b>hiérarchique</b>. Souvent présentée sous forme d’arbre avec ses ramifications, il s’agit du tout premier programme qui a permis de structurer l’information de façon hiérarchique. 
                                Ici, chaque enregistrement dépend d’un seul enregistrement, et chaque niveau d’enregistrement découle sur un ensemble de catégories plus petites. 
                            </li>
                            <li>
                                La BD <b>réseau</b>. Dans ce cas, contrairement à la BD hiérarchique, un objet peut avoir plusieurs objets parents et plusieurs objets enfants, ce qui permet de s’approcher du monde réel 
                                plus fidèlement. Des liens multiples sont ainsi créés entre les ensembles, permettant une vitesse et une polyvalence qui ont permis leur adoption massive. 
                            </li>
                            <li>
                                La BD <b>SQL</b> ou <b>relationnelle</b>. C’est la plus connue et la plus pratiquée actuellement. Reposant sur l’algèbre relationnel, elle a pour fonction de modéliser facilement les systèmes du monde 
                                réel, et de créer des bases de données à la fois simples à maintenir et à faire évoluer. Constituées d’un ensemble de tableaux, ces bases de données contiennent des données classées par 
                                catégorie. L’API standard pour ces BD est le <b>Structured Query Language</b> (<b>SQL</b>). 
                            </li>
                            <li>
                                La BD <b>orientée objet</b>. Cette typologie de base de données est encore en cours d’élaboration. Elle est focalisée sur la base de données des objets en tant que concept de programmation 
                                qui va permettre de simplifier la création de logiciels. 
                            </li>
                            <li>
                                La BD <b>orientée texte</b>. La “flat file database” se présente sous la forme d’un fichier .txt, .ini, .xml, .json,..., qui est soit un fichier texte, soit un fichier combinant du texte 
                                avec un fichier binaire. Chaque ligne ne comporte généralement qu’un seul enregistrement. 
                            </li>
                            <li>
                                La BD <B>distribuée</B>. Ce type de base de données présente des portions stockées au sein de différents endroits physiques, avec un traitement réparti ou répliqué entre différents 
                                points d’un réseau. Elle peut être homogène ou hétérogène : soit tous les emplacements physiques fonctionnent avec le même hardware et tournent sous le même système 
                                d’exploitation et les mêmes applications de bases de données, soit ils varient entre différents endroits physiques. 
                            </li>
                            <li>
                                La BD <B>cloud</B>. Optimisée ou directement créée pour les environnements virtualisés, elle peut être relative à un cloud privé, un cloud public ou un cloud hybride. Ses avantages sont 
                                multiples : paiement pour la capacité de stockage et la bande passante en fonction de l’usage, changement d’échelle sur demande, disponibilité plus élevée…
                            </li>
                            <li>
                                La BD <B>NoSQL</B>. Poussées par l’essor du Big Data, elles sont utiles pour les larges ensembles de données distribuées, et parfaites pour analyser des quantités importantes de données 
                                non structurées, ou stockées sur plusieurs serveurs cloud virtuels. 
                            </li>
                            <li>
                                La BD <B>orientée graph</B>. C’est un type de database <B>NoSQL</B> qui utilise la théorie des graphes pour stocker, cartographier et effectuer des requêtes sur les relations entre les 
                                données.
                            </li>
                        </ul>                        
                    </div> <!--col-md-10-->
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>