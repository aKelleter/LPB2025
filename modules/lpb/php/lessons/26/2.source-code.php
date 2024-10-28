<?php
    if(isset($_POST['nomControlInput']) && isset($_POST['prenomControlInput'])){
        $nom = $_POST['nomControlInput'];
        $prenom = $_POST['prenomControlInput'];
    }
    
    if(isset($_GET['nomControlInput']) && isset($_GET['prenomControlInput'])){
        $nom = $_GET['nomControlInput'];
        $prenom = $_GET['prenomControlInput'];
    }
    
    // Capturer la méthode du form
    $method = $_SERVER['REQUEST_METHOD'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">                    
                    <h1>Formulaire</h1>
                    <div class="mb-3"> <?= 'Méthode du formulaire : <b>' . $method . '</b'; ?> </div>
                    <hr>
                    <form method="post" action="">
                    <div class="mb-10">
                        <label for="prenomControlInput1" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenomControlInput" name="prenomControlInput">
                    </div>
                    <div class="mb-10">
                        <label for="nomControlInput1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nomControlInput" name="nomControlInput">
                    </div>                   
                    <div class="mb-10 mt-3">
                            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                    </div>            
                    <div class="alert alert-success">
                        <?php
                            if((isset($nom) && !empty($nom)) && (isset($prenom) && !empty($prenom))){
                                echo "<p>Bonjour $prenom $nom</p>";
                            }
                        ?>
                    </div>            
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
</body>
</html>
