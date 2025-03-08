<?php
    require_once('conf.php');
 
    $message = '';

    $_SESSION['WHOAMI'] = 'Alain';

    // Si le formulaire est soumis    
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['login']) && isset($_POST['password']))
        {   
            switch(TYPE_CONNECT) {
                
                case 'database':
                    $pdo = connectPDO();
                    if(loginWithDataBase($pdo, $_POST['login'], $_POST['password'])) {
                        header('Location: home.php');
                        exit;
                    }else{
                        $message = '<div class="alert alert-danger text-center">Identifiants incorrects</div>';
                    }
                    break;

                case 'array': 
                    if(loginWithArray(USER_LIST, $_POST['login'], $_POST['password'])) {
                        header('Location: home.php');
                        exit;
                    }else{
                        $message = '<div class="alert alert-danger text-center">Identifiants incorrects</div>';
                    }
                    break;
                default:
                    $message = '<div class="alert alert-danger text-center">Type de connexion non défini</div>';
                    break;                
            }
        }    
    }
    
    // Redirection si déjà connecté     
    if(checkConnexion()) {
        header('Location: home.php');
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="assets/img/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <title><?= APP_NAME?></title>
</head>
<body>
    <div class="container text-center">
        <h1 class="mt-5 mb-5"><?= APP_NAME?></h1>  
        <hr>
        <?php echo $message; ?>
        <form class="mt-5" action="" method="post">
            <input type="text" name="login" id="login" placeholder="login">
            <input type="password" name="password" id="password" placeholder="password">
            <input type="submit" value="login">
        </form>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>