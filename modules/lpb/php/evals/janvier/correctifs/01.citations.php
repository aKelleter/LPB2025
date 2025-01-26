<?php
/**
 * **********************************************
 *                   CONTROLLER
 * **********************************************
 */
// Déclaration du tableau de citations
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

// Sélection d'une citation aléatoire
    // Exemple de syntaxe avec array_rand() : 
    //$citationAleatoire = $citations[array_rand($citations)];

    // Exemple de syntaxe avec rand() :
    $citationAleatoire = $citations[rand(0, count($citations) - 1)];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Générateur de Citation</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row text-center mt-5">
                <h1>Votre citation :</h1>
                <p>
                    <cite class="text-primary"><em><?= htmlspecialchars($citationAleatoire); ?></em></cite>
                </p>
                <p>
                    <a class="btn btn-outline-secondary" href="01.citations.php" role="button">Reload</a>
                </p>
                
            </div>
        </div>
    </main>
</body>
</html>
