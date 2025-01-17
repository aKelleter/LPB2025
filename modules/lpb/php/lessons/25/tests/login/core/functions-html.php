<?php
declare(strict_types=1);

/**
 * Fonction de génération du code HTML de l'entête
 * 
 * @param string $pagename 
 * @return string 
 */
function HTMLHead(string $pagename = ''): string
{
    $separator = (!empty($pagename))? ' : ' :  '';
    $path = (!empty($pagename))? '../' :  '';

    $string = '';

    $string .= '<meta charset="UTF-8">'."\n";
    $string .= '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">'."\n";
    $string .= '<link href="'.$path.D_ASSETS.DS.D_CSS.DS.'styles.css" rel="stylesheet">'."\n";
    $string .= '<link rel="shortcut icon" href="'.$path.D_ASSETS.DS.'img/favicon.ico" type="image/x-icon">'."\n";;
    $string .= '<title>'.APP_NAME . $separator . $pagename.'</title>'."\n";;

    return $string;
} 

function HTMLMenu($path = ''): string
{
    $string = '';
    $string .= '<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">';
    $string .= '<div class="container-fluid">';
    $string .= '<a class="navbar-brand" href="'.$path.'index.php">'.APP_NAME.'</a>';
    $string .= '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
    $string .= '<span class="navbar-toggler-icon"></span>';
    $string .= '</button>';
    $string .= '<div class="collapse navbar-collapse" id="navbarNav">';
    $string .= '<ul class="navbar-nav">';
    $string .= '<li class="nav-item">';
    $string .= '<a class="nav-link active" aria-current="page" href="'.$path.D_APP.DS.'home.php">Home</a>';
    $string .= '</li>';
    $string .= '</ul>';
    $string .= '</div>';
    $string .= '</div>';
    $string .= '</nav>';

    return $string;
}

/**
 * Fonction de génération du code HTML du formulaire d'identification
 * 
 * @return string 
 */
function HTMLFormIdentify(): string {
    $string = '';
    $string .= '<form method="post">';                                         
    $string .= '<div class="mb-3">';
    $string .= '<label class="form-label" for="email">Email :</label>';
    $string .= '<input class="form-control" type="email" name="user_email" id="user_email" required>';
    $string .= '</div>';
    $string .= '<div class="mb-3">';
    $string .= '<label class="form-label" for="message">Mot de passe :</label>';
    $string .= '<input class="form-control" type="password" name="user_pwd" id="user_pwd" required>';
    $string .= '</div>';
    $string .= '<div class="mb-3">';
    $string .= '<button class="btn btn-outline-primary" type="submit">S\'identifier</button>';                            
    $string .= '</div>';
    $string .= '</form>';

    return $string;
}

/**
 * Fonction de génération du code HTML du footer
 * 
 * @return string 
 */
function HTMLFooter(): string
{
    $string = '';
    $string .= '<footer class="text-center mt-5">';
    $string .= '<p>&copy; '.APP_AUTHOR.' - '.APP_YEAR.'</p>';
    $string .= '</footer>';

    return $string;
}

/**
 * Fonction de génération du code HTML d'affichage des données de l'utilisateur
 * 
 * @param array $user 
 * @return string 
 */
function HTMLUserDatas(array $user): string
{
    
    $string = '';
    $string .= '<p>Bonjour '.$user['email'].'</p>';
    $string .= '<p>Voici les informations vous concernant : </p>';
    $string .= '<ul>';
    $string .= '<li>Adresse email : '.$user['email'].'</li>';
    $string .= '<li>Heure de connexion : '.date('d/m/Y H:i:s', $user['time']).'</li>';
    $string .= '<li>Adresse IP : '.$user['ip'].'</li>';
    $string .= '<li>User Agent : '.$user['ua'].'</li>';
    $string .= '</ul>';
    $string .= '<p><a href="../logout.php">Se déconnecter</a></p>';

    return $string;
}




