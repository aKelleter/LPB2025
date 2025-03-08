<?php
declare(strict_types=1);

/**
 * Fonction de génération du menu de navigation
 * 
 * @return string 
 */
function HTMLMenu(string $active = ''): string {
    switch($active) {
        case 'index':
            $string = '<nav class="nav">';
            $string .= '<a class="nav-link active" href="index.php">Accueil</a>';
            $string .= (checkConnexion()) ? '<a class="nav-link" href="admin.php">Admin</a>' : '';
            $string .= (checkConnexion()) ? '<a class="nav-link" href="logout.php">Logout</a>' : '<a class="nav-link" href="login.php">Login</a>';           
            $string .= '</nav>';
            break;
        case 'login':
            $string = '<nav class="nav">';
            $string .= '<a class="nav-link" href="index.php">Accueil</a>';
            $string .= (checkConnexion()) ? '<a class="nav-link" href="admin.php">Admin</a>' : '';
            $string .= (checkConnexion()) ? '<a class="nav-link" href="logout.php">Logout</a>' : '<a class="nav-link active" href="login.php">Login</a>';
            $string .= '</nav>';
            break;
        case 'admin':
            $string = '<nav class="nav">';
            $string .= '<a class="nav-link" href="index.php">Accueil</a>';
            $string .= (checkConnexion()) ? '<a class="nav-link active" href="admin.php">Admin</a>' : '';
            $string .= (checkConnexion()) ? '<a class="nav-link" href="logout.php">Logout</a>' : '<a class="nav-link" href="login.php">Login</a>';
            $string .= '</nav>';
            break;
        default:
            $string = '<nav class="nav">';
            $string .= '<a class="nav-link" href="index.php">Accueil</a>';
            $string .= (checkConnexion()) ? '<a class="nav-link" href="admin.php">Admin</a>' : '';
            $string .= (checkConnexion()) ? '<a class="nav-link" href="logout.php">Logout</a>' : '<a class="nav-link" href="login.php">Login</a>';
            $string .= '</nav>';
            break;
    }
    return $string;
}

/**
 * Fonction de génération du code HTML de l'entête
 * 
 * @param string $title 
 * @return string 
 */
function HTMLHead(string $title = ''): string {
    $string = '<!DOCTYPE html>'."\n";
    $string .= '<html lang="fr">'."\n";
    $string .= '<head>'."\n";
    $string .= '<meta charset="UTF-8">'."\n";
    $string .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
    $string .= '<link rel="icon" href="assets/img/favicon.ico" />'."\n";
    $string .= '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">'."\n";
    $string .= '<link rel="stylesheet" href="assets/css/style.css">'."\n";
    $string .= '<title>'.APP_NAME_SHORT.' : '.$title.'</title>'."\n";    
    $string .= '</head>'."\n";    

    return $string;
}

/**
 * Fonction de génération du code HTML d'affichage des articles
 * 
 * @param array $articles 
 * @return string 
 */
function HTMLDisplayArticles(array $articles): string {    
    $string = '';
    $iconEdition = (checkConnexion()) ?'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                                        </svg>' : '';    
    foreach($articles as $article) {     
        $linkEdition = (checkConnexion()) ? '<a href="edit.php?id='.$article['id'].'">'.$iconEdition.'</a>' : '';
           
        $string .= '<div class="card mb-5">'."\n";
            $string .= '<div class="card-header"><strong>'.$article['titre'].'</strong> du <small>'.$article['date_creation'].'</small> '.$linkEdition.'</div>'."\n";
            $string .= '<div class="card-body">'."\n";
                $string .= '<p class="card-text">'.nl2br($article['contenu']).'</p>'."\n";
            $string .= '</div>'."\n";
        $string .= '</div>'."\n";
    }
    return $string;
}

/**
 * Fonction de génération du code HTML d'affichage des articles avec des champs spécifiés
 * 
 * @param array $articles 
 * @param array $fields 
 * @return string 
 */
function HTMLDisplayArticlesFields(array $articles, array $fields = []): string {    
    $string = '';
    foreach($articles as $article) {
        $string .= '<div class="article">'."\n";
        foreach($fields as $field) {
            switch($field) {
                case 'titre':
                    $string .= '<div class="titre">'.$article[$field].'</div>'."\n";
                    break;
                case 'contenu':
                    $string .= '<div class="contenu">'.$article[$field].'</div>'."\n";
                    break;
                default:
                    $string .= '<div class="default">'.$article[$field].'</div>'."\n";
                    break;
            }            
        }
        $string .= '</div>'."\n";
    }
    return $string;
}

/**
 * Fonction de génération du code HTML d'affichage des articles pour l'administration
 * 
 * @param array $articles 
 * @return string 
 */
function HTMLDisplayArticlesForAdmin(array $articles): string {    
    $string = '';
    foreach($articles as $article) {        
        $string .= '<div class="card mb-5">'."\n";
            $string .= '<div class="card-header"><strong>'.$article['titre'].'</strong> du <small>'.$article['date_creation'].'</small> '.'</div>'."\n";
            $string .= '<div class="card-body">'."\n";
                $string .= '<p class="card-text">'.nl2br($article['contenu']).'</p>'."\n";
                $string .= '<a class="btn btn-primary" href="edit.php?id='.$article['id'].'">Modifier</a>'."\n";
                $string .= '<a class="btn btn-danger" href="admin.php?delete_id='.$article['id'].'">Supprimer</a>'."\n";
            $string .= '</div>'."\n";
        $string .= '</div>'."\n";
    }
    return $string;
}