<?php
    // Informations de connexion
    $host = 'localhost'; // Adresse du serveur MySQL
    $dbname = 'blog_v1'; // Nom de la base de données
    $username = 'root'; // Nom d'utilisateur MySQL
    $password = 'Tyu567;'; // Mot de passe MySQL

    try {
        // Création d'une instance PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        // Configuration des options PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion à la base de données réussie !";
    } catch (PDOException $e) {
        // Gestion des erreurs
        die("Erreur de connexion : " . $e->getMessage());
    }

    // Exemple de requête SELECT
    $sql = "SELECT * FROM users WHERE nom = :nom";

    try {
        // Préparation de la requête
        $stmt = $pdo->prepare($sql);
        
        // Liaison des paramètres
        $stmt->bindParam(':nom', $nom);
        $nom = "Smith";

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<br>Résultats de la requête : $sql <br>";
        foreach ($results as $row) {
            echo "<p>Nom : " . $row['nom'] . ",<br> Prenom : " . $row['prenom'] . ",<br> Email : " . $row['email'] . " </p>";
        }

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }