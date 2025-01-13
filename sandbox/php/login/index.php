<?php
    require_once('conf.php');
    $message = '';

    $_SESSION['WHOAMI'] = 'Alain';

    // Si le formulaire est soumis
    /*
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['login']) && isset($_POST['password']))
        {
           if(loginWithArray(USER_LIST, $_POST['login'], $_POST['password'])) {
                header('Location: home.php');
                exit;
            }else{
                $message = '<div class="alert alert-danger text-center">Identifiants incorrects</div>';
            }
        }
    }
    */

    // Redirection si déjà connecté
    /*    
    if(checkConnexion()) {
        header('Location: home.php');
        exit;
    }
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="assets/img/favicon.ico" />
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>  
        <form action="" method="post">
            <input type="text" name="login" id="login" placeholder="login">
            <input type="password" name="password" id="password" placeholder="password">
            <input type="submit" value="login">
        </form>
    </div>    
</body>
</html>