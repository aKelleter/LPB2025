<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire</title>
</head>
<body class="mt-5">
    <div class="container">

        <?php
            
            // Affiche soit la méthode par défaut soit la méthode en cours
            echo '<p>Valeur de  $_SERVER[\'REQUEST_METHOD\'] : <strong>' . $_SERVER['REQUEST_METHOD'].'</strong></p>'; 

            // Affichage des tableaux de données brutes
            echo '<p><pre>var_dump GET : <br>';
            var_dump($_GET);
            echo '<br>var_dump POST :<br>';
            var_dump($_POST);
            echo '</pre></p>';

            // Test de la méthode d'envoi du formulaire
            if($_SERVER['REQUEST_METHOD'] === 'POST')
                echo '<p>Le formulaire a été envoyé avec la méthode POST</a>';
            else {
                echo "<p>Aucun formulaire POST n'a été soumis, ou c’est une requête GET.</p>";
            }   

            // Test de l'existence des données et les affiches si oui
            if(isset($_GET['nom']))
                echo '<p>Nom :'. $_GET['nom'].'</p>'; 

            if(isset($_GET['age']))
                echo '<p>Age :'. $_GET['age'].'</p>'; 

            if(isset($_POST['nom']))
                echo '<p>Nom :'. $_POST['nom'].'</p>'; 

            if(isset($_POST['age']))
                echo '<p>Age :'. $_POST['age'].'</p>'; 
        ?>    
        <hr class="mt-5 mb-5">
        <h1>Formulaire GET</h1>
        <form class="mb-5" action="get-post.php" method="get">
            <label>Votre nom :</label>
            <input type="text" name="nom" required>
            <input type="number" name="age">
            <button type="submit">Envoyer</button>
        </form>
        <hr>
        <h1 class="mt-5">Formulaire POST</h1>
        <form action="get-post.php" method="post">
            <label>Votre nom :</label>
            <input type="text" name="nom" required>
            <input type="number" name="age">
            <button type="submit">Envoyer</button>
        </form>

    </div>
</body>
</html>