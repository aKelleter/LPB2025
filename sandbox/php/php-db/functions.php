<?php
/**
 * Sélection des utilisateurs en base de données
 *
 * @param mixed $pdo 
 * @return array 
 */
function selectUsers($pdo) {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $utilisateurs = $stmt->fetchAll();
    return $utilisateurs;
} 

/**
 * Affichage des utilisateurs
 *
 * @param array $utilisateurs 
 * @return string 
 */
function afficherUtilisateurs($utilisateurs) {
    
    $html = '<table>';
    $html .= '<tr><th>ID</th><th>Nom</th><th>Email</th><th>Date de création</th><th>Photo</th></tr>';
    foreach ($utilisateurs as $utilisateur) {
        $photo = (isset($utilisateur['photo']))? $utilisateur['photo'] : 'nophoto.jpg';
        $html .= '<tr>';
        $html .= '<td>' . $utilisateur['users_id'] . '</td>';
        $html .= '<td>' . $utilisateur['nom'] . '</td>';
        $html .= '<td>' . $utilisateur['email'] . '</td>';
        $html .= '<td>' . $utilisateur['created_at'] . '</td>';
        $html .= '<td><img src="'.PATH_PHOTO.$photo.'" width="30"></td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
} 
/*
 * Explication :

    On utilise la méthode query() de l'objet PDO ($pdo) pour exécuter la requête.
    fetchAll() récupère tous les résultats sous forme de tableau associatif.
 */