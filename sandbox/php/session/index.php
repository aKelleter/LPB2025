<?php
    require_once'boot.php';

    $_SESSION['whoami'] = 'Alain Kelleter'; 
    $_SESSION['age'] = 54;
    $_SESSION['job'] = ['teacher', 'developer', 'designer'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Tests sur les sessions</h1>
</body>
</html>
