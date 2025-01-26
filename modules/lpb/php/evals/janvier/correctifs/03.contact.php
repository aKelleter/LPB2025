<?php
/**
 * **********************************************
 *                   CONTROLLER
 * **********************************************
 */

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $nom = $_POST['nom'] ?? "";
    $email = $_POST['email'] ?? "";
    $messageContact = $_POST['message'] ?? "";
    
    if (!empty($nom) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($messageContact)) {
        $message = "Merci, $nom. Votre message a été envoyé !";
    } else {
        $message = "Veuillez remplir correctement tous les champs.";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Formulaire de contact</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">                
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="mb-5 text-center">Formulaire de contact</h1>

                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label" for="nom">Nom :</label>
                            <input class="form-control" type="text" name="nom" id="nom" required>
                        </div>                        
                        <div class="mb-3">
                            <label class="form-label" for="email">Email :</label>
                            <input class="form-control" type="email" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="message">Message :</label>
                            <textarea class="form-control" name="message" id="message" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-primary" type="submit">Envoyer</button>
                            <a class="btn btn-outline-secondary" href="03.contact.php">Reload</a>
                        </div>
                    </form>

                    <p><?= htmlspecialchars($message); ?></p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
</body>
</html>

