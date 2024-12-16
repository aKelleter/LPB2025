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
                        <h1 class="text-center mt-3">Préparation à l'évaluation du mois de Janvier</h1>
                        <h3>Les Tableaux</h3>                       
                        <p>
                        Liens vers les leçons : <br>
                            <a href="<?=$_SESSION['R']?>modules/lpb/php/lessons/20/index.php">Les tableaux indexés</a> <br>
                            <a href="<?=$_SESSION['R']?>modules/lpb/php/lessons/21/index.php">Les tableaux associatifs</a>
                        </p>                       
                        <p> 
                        <b>Rappels :</b> <br>
                        <textarea class="code-php">
                            // Déclaration d'un tableau indexé
                            $tableau1 = [1, 2, 3];
                            // Déclaration d'un tableau associatif
                            $tableau2 = ['cle1' => 1, 'cle2' => 2, 'cle3' => 3];

                            // Parcours et affichage d'un tableau indexé
                            echo 'Affichage du tableau indexé &lt;br&gt;'; 
                            foreach ($tableau1 as $cle => $valeur) {
                                echo $cle . ' : ' . $valeur . '<br>';;
                            }

                            // Parcours et affichage d'un tableau associatif
                            echo 'Affichage du tableau associatif &lt;br&gt;'; 
                            foreach ($tableau2 as $cle => $valeur) {
                                echo $cle . ' : ' . $valeur . '&lt;br&gt;';;
                            }

                            // Compter le nombre d'éléments d'un tableau
                            echo 'Nombre d\'éléments du tableau indexé : ' . count($tableau1) . '&lt;br&gt;';

                            // Accéder au dernier élément d'un tableau indexé
                            echo 'Dernier élément du tableau indexé : ' . $tableau1[count($tableau1) - 1] . '&lt;br&gt;';
                        </textarea>
                        </p>
                        <p>
                        <b>Exécution du code : </b><br>
                        <?php
                            // Déclaration d'un tableau indexé
                            $tableau1 = [1, 2, 3];
                            // Déclaration d'un tableau associatif
                            $tableau2 = ['cle1' => 1, 'cle2' => 2, 'cle3' => 3];

                            // Parcours et affichage d'un tableau indexé
                            echo 'Affichage du tableau indexé <br>'; 
                            foreach ($tableau1 as $cle => $valeur) {
                                echo $cle . ' : ' . $valeur . '<br>';;
                            }

                            // Parcours et affichage d'un tableau associatif
                            echo 'Affichage du tableau associatif <br>'; 
                            foreach ($tableau2 as $cle => $valeur) {
                                echo $cle . ' : ' . $valeur . '<br>';;
                            }

                            // Compter le nombre d'éléments d'un tableau
                            echo 'Nombre d\'éléments du tableau indexé : ' . count($tableau1) . '<br>';

                            // Accéder au dernier élément d'un tableau indexé
                            echo 'Dernier élément du tableau indexé : ' . $tableau1[count($tableau1) - 1] . '<br>';
                            
                        ?>
                        </p>
                        <h3>Les Formulaires</h3>                        
                        <p>
                        Liens vers la leçon : <br>
                            <a href="<?=$_SESSION['R']?>modules/lpb/php/lessons/26/index.php">Les formulaires</a> <br>
                        </p>
                        </p>                        
                        <p>
                        <b>Rappels : </b> <br>
                        <textarea class="code-php">
                            // Afficher un formulaire
                            echo '&lt;form method="post"&gt;';
                            echo '&lt;label for="nom"&gt;Nom : &lt;/label&gt;';
                            echo '&lt;input type="text" name="nom" id="nom"&gt;&lt;br&gt;';
                            echo '&lt;label for="prenom"&gt;Prénom : &lt;/label&gt;';
                            echo '&lt;input type="text" name="prenom" id="prenom"&gt;&lt;br&gt;';
                            echo '&lt;label for="email"&gt;Email : &lt;/label&gt;';
                            echo '&lt;input type="email" name="email" id="email"&gt;&lt;br&gt;';
                            echo '&lt;label for="message"&gt;Message : &lt;/label&gt;';
                            echo '&lt;textarea name="message" id="message"&gt;&lt;/textarea&gt;&lt;br&gt;';
                            echo '&lt;button type="submit"&gt;Envoyer&lt;/button&gt;';
                            echo '&lt;/form&gt;';

                           // Tester si le formulaire est envoyé avec la méthode POST 
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                // Récupérer les données du formulaire
                                $nom = $_POST['nom'] ?? null;
                                $prenom = $_POST['prenom'] ?? null;
                                $email = $_POST['email'] ?? null;
                                $message = $_POST['message'] ?? null;

                                // Afficher les données du formulaire
                                echo 'Nom : ' . $nom . '&lt;br&gt;';
                                echo 'Prénom : ' . $prenom . '&lt;br&gt;';
                                echo 'Email : ' . $email . '&lt;br&gt;';
                                echo 'Message : ' . $message . '&lt;br&gt;';
                            }

                            

                        </textarea>
                        </p>
                        <p>
                        <b>Exécution du code :</b>  <br>                        
                        <?php
                        // Afficher un formulaire
                        echo '<form method="post">';
                        echo '<label for="nom">Nom : </label>';
                        echo '<input type="text" name="nom" id="nom"><br>';
                        echo '<label for="prenom">Prénom : </label>';
                        echo '<input type="text" name="prenom" id="prenom"><br>';
                        echo '<label for="email">Email : </label>';
                        echo '<input type="email" name="email" id="email"><br>';
                        echo '<label for="message">Message : </label>';
                        echo '<textarea name="message" id="message"></textarea><br>';
                        echo '<button type="submit">Envoyer</button>';
                        echo '</form>';
                        
                       // Tester si le formulaire est envoyé avec la méthode POST 
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Récupérer les données du formulaire
                            $nom = $_POST['nom'] ?? null;
                            $prenom = $_POST['prenom'] ?? null;
                            $email = $_POST['email'] ?? null;
                            $message = $_POST['message'] ?? null;

                            // Afficher les données du formulaire
                            echo 'Nom : ' . $nom . '<br>';
                            echo 'Prénom : ' . $prenom . '<br>';
                            echo 'Email : ' . $email . '<br>';
                            echo 'Message : ' . $message . '<br>';
                        }
                        
                        ?>
                        </p>

                        <h3>Les Fonctions</h3>                        
                        <p>
                            Liens vers les leçons : <br>
                            <a href="<?=$_SESSION['R']?>modules/lpb/php/lessons/16/index.php">Introduction aux fonctions</a> <br>
                            <a href="<?=$_SESSION['R']?>modules/lpb/php/lessons/17/index.php">Le passage des arguments</a> <br>
                            <a href="<?=$_SESSION['R']?>modules/lpb/php/lessons/18/index.php">Les valeurs de retour d'une fonction</a> <br>
                        </p>
                        <p> 
                        <b>Rappels :</b> <br>
                        <textarea class="code-php">
                            // Rappel sur les fonctions
                            function nomDeLaFonction($parametre1, $parametre2) {                                
                                // Instructions
                                $resultat = $parametre1 + $parametre2;
                                return $resultat;
                            }

                            // Appel de la fonction
                            echo $resultat = nomDeLaFonction(5, 10);
                            echo '&lt;br&gt;';

                            // Exemple de fonction
                            function addition($a, $b) {
                                return $a + $b;
                            }

                            // Appel de la fonction
                            echo 'Résultat de l\'addition : ' . addition(2, 3);

                            // Fonction qui génère du code HTML
                            function genererCodeHtml($titre, $contenu) {
                                $string = '';
                                $string .= '&lt;h6&gt;' . $titre . '&lt;/h6&gt;&lt;p&gt;' . $contenu . '&lt;/p&gt;';
                                return $string;
                            }

                            // Appel de la fonction genererCodeHtml() dans un bloc PHP
                            echo genererCodeHtml('Premier titre', 'Contenu 1');

                            // OU dans du code HTML
                            &lt;?= genererCodeHtml('Deuxième titre', 'Contenu 2'); ?&gt;
                        </textarea>
                        </p>
                        <p>
                        <b>Exécution du code :</b>  <br>                        
                        <?php
                            // Rappel sur les fonctions
                            function nomDeLaFonction($parametre1, $parametre2) {
                                $resultat = $parametre1 + $parametre2;
                                // Instructions
                                return $resultat;
                            }

                            // Appel de la fonction
                            echo $resultat = nomDeLaFonction(5, 10);
                            echo '<br>';

                            // Exemple de fonction
                            function addition($a, $b) {
                                return $a + $b;
                            }

                            // Appel de la fonction
                            echo 'Résultat de l\'addition : ' . addition(2, 3);

                            // Fonction qui génère du code HTML
                            function genererCodeHtml($titre, $contenu) {
                                $string = '';
                                $string .= '<h6>' . $titre . '</h6><p>' . $contenu . '</p>';
                                return $string;
                            }

                            // Appel de la fonction genererCodeHtml() dans un bloc PHP
                            echo genererCodeHtml('Premier titre', 'Contenu 1');                          
                        ?>
                        <?= genererCodeHtml('Deuxième titre', 'Contenu 2'); ?>
                        </p>
                        <p>
                            <b>Les fonctions internes utiles :</b>  <br>  
                            <textarea class="code-php">
                                // Fonction qui génère un nombre aléatoire avec rand()
                                $nombreAleatoire = rand(1, 10);
                                echo 'Nombre aléatoire : ' . $nombreAleatoire . '&lt;br&gt;';

                                // Fonction qui compte le nombre d'éléments d'un tableau avec count()
                                $tableau = [1, 2, 3, 4, 5];
                                echo 'Nombre d\'éléments du tableau : ' . count($tableau) . '&lt;br&gt;';

                                // Vérifie si une valeur est numérique avec is_numeric()
                                $valeur = '10';
                                if (is_numeric($valeur)) {
                                    echo 'La valeur ' . $valeur . ' est numérique&lt;br&gt;';
                                } else {
                                    echo 'La valeur ' . $valeur . ' n\'est pas numérique&lt;br&gt;';
                                }

                                // Vérifie si c'est un e-mail avec filter_var()
                                $email = 'test@test.be';
                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    echo 'L\'adresse e-mail ' . $email . ' est valide&lt;br&gt;';
                                } else {
                                    echo 'L\'adresse e-mail ' . $email . ' n\'est pas valide&lt;br&gt;';
                                }

                                // Vérifie si une variables est vide avec empty()
                                $variable = '';
                                if (empty($variable)) {
                                    echo 'La variable est vide&lt;br&gt;';
                                } else {
                                    echo 'La variable n\'est pas vide&lt;br&gt;';
                                }

                                // Vérifie si une variable est définie et différente de null avec isset()
                                if (isset($variable)) {
                                    echo 'La variable est définie&lt;br&gt;';
                                } else {
                                    echo 'La variable n\'est pas définie&lt;br&gt;';
                                }

                                // Vérifie si une variable est un tableau avec is_array()
                                $tableau = [1, 2, 3];
                                if (is_array($tableau)) {
                                    echo 'La variable est un tableau&lt;br&gt;';
                                } else {
                                    echo 'La variable n\'est pas un tableau&lt;br&gt;';
                                }

                                // Remplacer un caractère dans une chaîne de caractères avec str_replace()
                                $chaine = 'Bonjour';
                                echo 'Chaine de caractères : ' . $chaine . '&lt;br&gt;';
                                echo 'Chaine de caractères modifiée : ' . str_replace('o', 'a', $chaine) . '&lt;br&gt;';

                                // Ecrire Sa propre fonction print_r2() - Utile pour afficher et débugger un tableau  
                                function print_r2($val){
                                    echo '<pre>';
                                    print_r($val);
                                    echo  '</pre>';
                                }
                                print_r2($tableau);

                            </textarea>
                        </p>
                        <p>
                            <b>Exécution du code :</b>  <br>  
                            <?php
                                // Fonction qui génère un nombre aléatoire avec rand()
                                $nombreAleatoire = rand(1, 10);
                                echo 'Nombre aléatoire : ' . $nombreAleatoire . '<br>';

                                // Fonction qui compte le nombre d'éléments d'un tableau avec count()
                                $tableau = [1, 2, 3, 4, 5];
                                echo 'Nombre d\'éléments du tableau : ' . count($tableau) . '<br>';

                                // Vérifie si une valeur est numérique avec is_numeric()
                                $valeur = '10';
                                if (is_numeric($valeur)) {
                                    echo 'La valeur ' . $valeur . ' est numérique<br>';
                                } else {
                                    echo 'La valeur ' . $valeur . ' n\'est pas numérique<br>';
                                }

                                // Vérifie si c'est un e-mail avec filter_var()
                                $email = 'test@test.be';
                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    echo 'L\'adresse e-mail ' . $email . ' est valide<br>';
                                } else {
                                    echo 'L\'adresse e-mail ' . $email . ' n\'est pas valide<br>';
                                }

                                // Vérifie si une variables est vide avec empty()
                                $variable = '';
                                if (empty($variable)) {
                                    echo 'La variable est vide<br>';
                                } else {
                                    echo 'La variable n\'est pas vide<br>';
                                }

                                // Vérifie si une variable est définie et différente de null avec isset()
                                if (isset($variable)) {
                                    echo 'La variable est définie<br>';
                                } else {
                                    echo 'La variable n\'est pas définie<br>';
                                }

                                // Vérifie si une variable est un tableau avec is_array()
                                $tableau = [1, 2, 3];
                                if (is_array($tableau)) {
                                    echo 'La variable est un tableau<br>';
                                } else {
                                    echo 'La variable n\'est pas un tableau<br>';
                                }

                                // Remplacer un caractère dans une chaîne de caractères avec str_replace()
                                $chaine = 'Bonjour';
                                echo 'Chaine de caractères : ' . $chaine . '<br>';
                                echo 'Chaine de caractères modifiée : ' . str_replace('o', 'a', $chaine) . '<br>';

                                // Ecrire Sa propre fonction print_r2() - Utile pour afficher et débugger un tableau  
                                function print_r2($val){
                                    echo '<pre>';
                                    print_r($val);
                                    echo  '</pre>';
                                }
                                print_r2($tableau);
                            ?> 
                        </p>
                        <p>
                            <b>Happy coding !</b> 🤓
                        </p>            
                            

                                               

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