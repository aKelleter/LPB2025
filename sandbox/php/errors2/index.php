<?php

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        
        if (empty($_POST['email']) || empty($_POST['passwd'])) {
            throw new Exception('Veuillez remplir tous les champs');
        }else {
            $email = $_POST['email'];
            $passwd = $_POST['passwd'];
        }

    } catch (Exception $e) {
        $message = '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
    } finally {
        $titre = "Bienvenue";
    }
}else {
    $titre = "Veuillez vous identifier";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Error 2</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-md-6">
                <h1>Gestion des erreurs</h1>
                <h5 class="text-primary"><?= $titre ?></h5>
                <hr>                
                <?= $message ?? ''; ?>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email">                        
                    </div>
                    <div class="mb-3">
                        <label for="passwd" class="form-label">Password</label>
                        <input type="password" class="form-control" name="passwd" id="passwd">
                    </div>                    
                    <button type="submit" class="btn btn-cdev">Sign in</button>
                </form>                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
