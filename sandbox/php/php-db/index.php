<?php
    require_once 'connect-db.php';
    require_once 'functions.php';

    // Sélection des utilisateurs
    $utilisateurs = selectUsers($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPDB</title>
</head>
<body>

<h1>Liste des utilisateurs</h1>

<?php
/*
echo '<pre>';
print_r($utilisateurs);
echo '</pre>';
*/
?>
<?= afficherUtilisateurs($utilisateurs) ?>
</body>
</html>