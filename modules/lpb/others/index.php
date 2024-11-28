<?php 
    require_once('../../../boot.php');  
    $_SESSION['R'] = R3;
    require_once($_SESSION['R'].'app'.DS.'conf.php'); 
    $_SESSION['PAGE'] = OTHERS;      
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
                        <h1 class="mt-5 text-center">Les autres aspects du cours</h1>
                        <p class="text-center small">
                            <b class="red">Technologies, outils et autres</b>
                        </p>
                        <p class="text-center">
                            En tant que développeur Web nous sommes régulièrement confronté à devoir connaître et manipuler des technologies et des outils
                            qui ne sont pas directement liés à un langage de programmation. C'est pourquoi, il est important de connaître les bases de ces
                            technologies et des ses outils pour pouvoir les utiliser correctement. C'est ce que nous allons voir dans cette partie du cours.

                        </p>
                        <h3 class="mt-5">1. Comprendre le fonctionnement du Web</h3>
                        <p> 
                            Pour nous aider dans notre voyage à travers le monde du développement Web, nous allons commencer par comprendre comment il fonctionne.
                            Pour ce faire nous allons visiter des sites tels que "developper.mozilla.org" (MDN Web Docs) et consulter quelques articles :
                            <ol>
                                <li><a href="https://developer.mozilla.org/fr/docs/Learn/Common_questions/Web_mechanics/How_does_the_Internet_work" target="_blank">Le Fonctionnement de l'internet</a></li>
                                <li><a href="https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/How_the_Web_works" target="_blank">Démarrer avec le web : Commet fonctionne le Web</a></li>
                                <li><a href="https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_is_a_web_server" target="_blank">Qu'est-ce qu'un serveur Web ?</a></li>
                                <li><a href="https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/Dealing_with_files" target="_blank">Gérer les fichiers</a></li>
                                <li><a href="https://developer.mozilla.org/fr/docs/Learn/Common_questions/Web_mechanics/What_is_a_domain_name" target="_blank">Qu'est-ce qu'un DNS ?</a></li>
                                <li><a href="https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_is_a_URL" target="_blank">Qu'est-ce qu'une URL ?</a></li>
                                <li><a href="https://fr.wikipedia.org/wiki/Navigateur_web" target="_blank">Qu'est-ce qu'un navigateur ?</a></li>
                                <li><a href="https://fr.wikipedia.org/wiki/Framework_Web" target="_blank">Qu'est-ce qu'un framework Web ?</a></li>
                                <li><a href="https://fr.wikipedia.org/wiki/Base_de_donn%C3%A9es" target="_blank">Qu'est-ce qu'une base de données ?</a></li>                                
                            </ol>                 
                        </p>

                    </div> <!--col-md-10-->
                    <div class="col-md-1"></div>
                </div>
            </div>
        </main>
        <?php require_once $_SESSION['R'].'app'.DS.'footer.php'; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>