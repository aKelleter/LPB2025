<?php

    /**
     * CONTROLER
     */
    require_once('fcts.php');

    // Détermine le répertoire à afficher
    if (isset($_GET['album'])) {
        $repertoire = 'photos/' . $_GET['album'];
    }else{
        $repertoire = 'photos';
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Gestionnaire d'album photo</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">                
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mb-5 text-center">Gestionnaire d'album photo</h1>

                    <?php listerAlbums(); ?>
                    <?php afficherImages($repertoire); ?>  

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
</body>
</html>
