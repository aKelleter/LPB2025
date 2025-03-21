<?php
    // ****************
    // ** FONCTIONS  **
    // ****************
    /**
     * Fonction de division
     * @param mixed $a 
     * @param mixed $b 
     * @return int|float 
     * @throws Exception 
     */
    function division($a, $b) {
    
        // Test si le second nombre est égal à 0
        if($b == 0) {
            throw new Exception('Division par zéro impossible !');
        }
    
        // Test si les valeurs sont numériques
        if(!is_numeric($a) || !is_numeric($b))
        {
            throw new Exception('Les valeurs saisies doivent être des nombres !');
        }
    
    
        return $a / $b;
    }
    
    /**
     * Créer un message d'erreur
     * @param mixed $e 
     * @return string 
     */
    function createError($e) {
    
        $string = '<div style="color:red;">Erreur lors de la division<br>';
        $string .= $e->getMessage() . '<br>';
        $string .= 'Code d\'erreur : ' . $e->getCode() . '<br>';
        $string .= 'Fichier : ' . $e->getFile() . '<br>';
        $string .= '</div>';
    
        return $string;
    }

    // ****************
    // ** CONTROLEUR **
    // ****************
    
    // Message de retour pour l'utilisateur
    $msg = null; 

    // Test si le formulaire a été soumis
    if (!empty($_POST))
    {
        // Test si le premier nombre existe et n'est pas vide
        if(isset($_POST['nombre1']) || !empty($_POST['nombre1'])) {
          
            // Surveiller le code dans un bloc try/catch la division
            try {
                // Affecte le résultat de la fonction division() à la variable $resultat
                $resultat = division($_POST['nombre1'], $_POST['nombre2']);
                $msg =  '<span style="color:red;">La division de : ' . $_POST['nombre1'] . ' / ' . $_POST['nombre2'] . ' = ' . $resultat . '</span><br>';

            } catch (Exception $e) {                
                $msg = createError($e);
            }          
           
        }else {
            $msg =  '<span style="color:red;">Le formulaire de Division n\'a pas été complété</span><br>';
        }
    }else {
        $msg =  "Le formulaire de Division n'a pas été soumis<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Gérer les exceptions</title>
    
</head>
<body>

<div class="container">
[ <a href="index.php">BACK</a> ]  [ <a href="division.php">RELOAD</a> ]
    <h3>Formulaire : Division</h3> 
    <div> <?php echo $msg ?></div>   
    <form action="" method="post">
        <input type="text" name="nombre1" placeholder="Premier nombre"> /
        <input type="text" name="nombre2" placeholder="Second nombre">
        <input type="submit" value="Envoyer">
    </form>
   
</div>

</body>
</html>