<?php
    // Contrôle du cache
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");

    // Redirection vers une page si nécessaire
    if (!isset($_GET['access'])) {
        header("Location: error.php");
        exit;
    }

    // Définir le type de contenu
    header("Content-Type: application/json");

    // Envoyer une réponse JSON
    $response = [
        "status" => "success",
        "message" => "Bienvenue sur notre API"
    ];
    echo json_encode($response);

