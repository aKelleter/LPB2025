<?php
/**
 * **********************************************
 *                   CONTROLLER
 * **********************************************
 */

// Déclaration et intialisations des variables
$valeur = $_POST['valeur'] ?? null;
$typeConversion = $_POST['typeConversion'] ?? null;
$resultat = ["result" => null, "starting_unit" => null, "converted_unit" => null];

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
/**
 * Fonction de conversion
 * @param mixed $valeur 
 * @param mixed $typeConversion 
 * @return array{result: mixed, starting_unit: string, converted_unit: string}|null 
 */
function convertir($valeur, $typeConversion)
{
    $starting_unit = null;
    $converted_unit = null;    

    switch ($typeConversion) {
        case 'km_to_miles':
            $starting_unit = 'Kilomètres';
            $converted_unit = 'Miles';
            return ["result" => $valeur * 0.621371, "starting_unit" => $starting_unit, "converted_unit" => $converted_unit]; // Kilomètres à Miles
        case 'miles_to_km':
            $starting_unit = 'Miles';
            $converted_unit = 'Kilomètres';            
            return ["result" => $valeur / 0.621371, "starting_unit" => $starting_unit, "converted_unit" => $converted_unit]; // Miles à Kilomètres
        case 'c_to_f':
            $starting_unit = '°Celsius';
            $converted_unit = '°Fahrenheit';
            return ["result" => ($valeur * 9 / 5) + 32, "starting_unit" => $starting_unit, "converted_unit" => $converted_unit]; // Celsius à Fahrenheit
        case 'f_to_c':
            $starting_unit = '°Fahrenheit';
            $converted_unit = '°Celsius';            
            return ["result" => ($valeur - 32) * 5 / 9, "starting_unit" => $starting_unit, "converted_unit" => $converted_unit]; // Fahrenheit à Celsius
        case 'kg_to_lbs':
            $starting_unit = 'Kilogrammes';
            $converted_unit = 'Livres';            
            return ["result" => $valeur * 2.20462, "starting_unit" => $starting_unit, "converted_unit" => $converted_unit]; // Kilogrammes à Livres
        case 'lbs_to_kg':
            $starting_unit = 'Livres';
            $converted_unit = 'Kilogrammes';            
            return ["result" => $valeur / 2.20462, "starting_unit" => $starting_unit, "converted_unit" => $converted_unit]; // Livres à Kilogrammes
        default:                
            return null; // Conversion non valide
    }
}

// Conversion si la valeur est numérique et que le type de conversion est défini (test)
if (is_numeric($valeur) && !empty($typeConversion)) {
    $resultat = convertir($valeur, $typeConversion);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Convertisseur d'unités</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">                
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mb-5 text-center">Convertisseur d'unités</h1>

                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label" for="valeur">Entrez une valeur :</label>
                            <input class="form-control" type="number" name="valeur" id="valeur" step="any" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="typeConversion">Type de conversion :</label>
                            <select class="form-control" name="typeConversion" id="typeConversion" required>
                                <option value="km_to_miles">Kilomètres → Miles</option>
                                <option value="miles_to_km">Miles → Kilomètres</option>
                                <option value="c_to_f">Celsius → Fahrenheit</option>
                                <option value="f_to_c">Fahrenheit → Celsius</option>
                                <option value="kg_to_lbs">Kilogrammes → Livres</option>
                                <option value="lbs_to_kg">Livres → Kilogrammes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-primary" type="submit">Convertir</button>                            
                            <a class="btn btn-outline-secondary" href="02.convert.php">Reload</a>
                        </div>
                    </form>

                    <?php if ($resultat['result'] !== null): ?>
                        <h2>Résultat :</h2>
                        <p>
                            <span class="fw-bold"><?= $valeur; ?></span>
                            <?= $resultat['starting_unit']; ?> 
                            <span class="fst-italic text-danger">est égal à</span> 
                            <span class="fw-bold"><?= number_format($resultat['result'], 2, ',', '.'); ?></span>
                            <?= $resultat['converted_unit']; ?> 
                        </p>
                    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                        <p style="color: red;">Veuillez entrer une valeur valide et choisir un type de conversion.</p>
                    <?php endif; ?>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
</body>
</html>
