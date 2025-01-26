<?php
/**
 * **********************************************
 *                   CONTROLLER
 * **********************************************
 */

 $articles = [
    ["titre" => "Bienvenue sur mon blog", "contenu" => "Ceci est le premier article de mon blog !"],
    ["titre" => "PHP pour débutants", "contenu" => "Apprenez à créer des sites dynamiques avec PHP."],
    ["titre" => "Contactez-moi", "contenu" => "Laissez vos commentaires pour améliorer ce blog."]
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Mon Blog</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">                
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mb-5 text-center">Mon blog</h1>
                    
                    <?php foreach ($articles as $article): ?>
                        <article>
                            <h2><?= htmlspecialchars($article['titre']); ?></h2>
                            <p><?= htmlspecialchars($article['contenu']); ?></p>
                        </article>
                    <?php endforeach; ?>
                   
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
</body>
</html>

