<?php
    require_once'boot.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>Session: <?= $_SESSION['whoami']; ?></p>
    <p>Age: <?= $_SESSION['age']; ?></p>
    <p>Job: <?= $_SESSION['job'][0]; ?></p>
    <p>Job: <?= $_SESSION['job'][1]; ?></p>
    <p>Job: <?= $_SESSION['job'][2]; ?></p>        
</body>
</html>