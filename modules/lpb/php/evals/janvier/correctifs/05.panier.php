<?php
/**
 * **********************************************
 *                  DATAS
 * **********************************************
 */

$articles = [
    ["nom" => "Nike Air AF1", "prix" => 110, "photo" => "af1.png"],
    ["nom" => "T-shirt", "prix" => 29, "photo" => "t-shirt.png"],    
    ["nom" => "Pantalon", "prix" => 95, "photo" => "pantalon.png"]
];


/**
 * **********************************************
 *                   FONCTIONS
 * **********************************************
 */


function getFormulaire($articles) {

    $string = '';
    $string .= '<form method="post">';

    foreach ($articles as $index => $article) {
        $nom_article = str_replace(' ', '_', $article['nom']);
        $string .= '<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px;">';
        $string .= '<h4>' . $article['nom'] . ' <br> <small><em>' . $article['prix']. ' &euro;</em></small></h4>'; 
        $string .= '<div class="mb-3">'; 
        $string .= '<img src="img/'.$article['photo'].'" alt="'.$article['nom'].'" class="rounded">';        
        $string .= '</div>';          
        $string .= '<div>';       
        $string .= '<label class="form-label" for="quantite_'.$nom_article.'">Quantité :</label>';        
        $string .= '<input class="form-control" type="number" name="quantite_'.$nom_article.'" id="quantite_'.$nom_article.'" value="1" max="10" min="1">';              
        $string .= '<input type="hidden" name="prix_'.$nom_article.'" value="'.$article['prix'].'">';        
        $string .= '<input type="hidden" name="nom_'.$nom_article.'" value="'.$article['nom'].'">';        
        $string .= '</div>';             
        $string .= '</div>';             

    } 

    $string .=  '<button type="submit" class="btn btn-outline-primary" name="ajouter" value="">Ajouter au panier</button>';
    $string .=  ' <a class="btn btn-outline-secondary" href="05.panier.php">Reload</a>';
    $string .=  '</form>';

    return $string;
}


function getPanier($panier, $total_commande) {
    $string = '';
    $string .= '<ul>';
    //DEBUG//print_r2($panier);
    foreach ($panier as $article) {        
        $string .= '<li>' . $article['nom'] . ' (' . $article['prix']. '&euro;) <em class="text-danger">x ' . $article['quantite'] . '</em> = <small><em>' . $article['montant']. ' &euro;</em></small></li>';
    }
    $string .= '</ul>';
    $string .= '<h4>Montant total de la commande : ' . $total_commande . ' &euro;</h4>';
    return $string;
}

function print_r2($val){
    echo '<pre>';
    print_r($val);
    echo  '</pre>';
}

/**
 * **********************************************
 *                   CONTROLLER
 * **********************************************
 */

// Déclarations et initialisations
$panier = [];
$total_commande = 0;

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //DEBUG// print_r2($_POST);

    // Parcours des articles pour créer le panier et calculer le montant total de la commande
    foreach ($articles as $article) {
        $nom_article = str_replace(' ', '_', $article['nom']);
        $quantite = $_POST['quantite_'.$nom_article] ?? 0;
        if ($quantite > 0) {
            $panier[] = [
                'nom' => $article['nom'],
                'prix' => $article['prix'],                
                'quantite' => $quantite,
                'montant' => $article['prix'] * $quantite
            ];
            $total_commande += $article['prix'] * $quantite;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Amazaune</title>
</head>
<body>
    <main>
        <div class="container-fluid">

            <div class="row mt-1">                
                <div class="col-md-12">
                    <h1 class="mb-1 text-center">Ama<span class="text-info">zaune</span></h1>
                    <hr>
                </div>
            </div>

            <div class="row mt-1">                
                <div class="col-md-2"></div>
                <div class="col-md-4">
                  
                    <h2 class="mt-5 mb-5">Articles disponibles :</h2>
                    <?= getFormulaire($articles); ?>
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5 mb-5">Votre Panier :</h2>
                    <?= getPanier($panier, $total_commande); ?>                    
                    </div>
                <div class="col-md-2"></div>
            </div>

        </div>
    </main>
</body>
</html>
