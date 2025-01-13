<?php
    require_once('conf.php');

    $donnees = null;
    $logout = null;

    // On vérifie si l'utilisateur est connecté
    /*
    if(checkConnexion()) {
        $donnees = HTMLUserDatas($_SESSION['user']);
        $logout = '<a href="logout.php">Logout</a>';
    } else {
        header('Location: index.php');
        exit;
    }
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="assets/img/favicon.ico" />
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>Home</h1>
        <p>Welcome to the home page</p>
        <hr>
        <p>Who am I? <br> I'm <b><?= $_SESSION['WHOAMI'] ?></b></p>
        <hr>
       <p><?= $donnees ?></p>
       <p><?= $logout ?></p>
    </div>    
</body>
</html>