<?php
    require_once'boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Homepage</h1>
            <hr>
            <a href="index.php">Index</a>
            <hr>
            <p>Whoami: <?= $_SESSION['whoami']; ?></p>
            <p>Age: <?= $_SESSION['age']; ?></p>
            <p>Job: <?= $_SESSION['job'][0]; ?></p>
            <p>Job: <?= $_SESSION['job'][1]; ?></p>
            <p>Job: <?= $_SESSION['job'][2]; ?></p>        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>