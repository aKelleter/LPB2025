<?php
/*
 *  LIRE LES DONNÉES D'UNE BASE DE DONNÉES
 */

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$utilisateurs = $stmt->fetchAll();

foreach ($utilisateurs as $utilisateur) {
    echo "ID: " . $utilisateur['user_id'] . " - Nom: " . $utilisateur['nom'] . " - Email: " . $utilisateur['email'] . "<br>";
}
/*
 * Explication :

    On utilise query() pour exécuter la requête.
    fetchAll() récupère tous les résultats sous forme de tableau associatif.
 */
// ********************************************************************************************************************
/*
 *  AJOUTER DES DONNÉES DANS UNE BASE DE DONNÉES
 */

$nom = "Dubois";
$prenom = "Charlie";
$email = "charlie@example.com";

$sql = "INSERT INTO users (nom, prenom,  email) VALUES (:nom, :prenom, :email)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':email' => $email
]);

echo "Utilisateur ajouté avec succès.";

/*
Explication :

    prepare() prépare la requête SQL.
    execute() exécute la requête avec des paramètres sécurisés.
*/
// ********************************************************************************************************************
/*
 *  MODIFIER DES DONNÉES DANS UNE BASE DE DONNÉES
 */

$id = 1;  // Modifier l'utilisateur avec l'ID 1
$nouveau_nom = "Durand";

$sql = "UPDATE users SET nom = :nom WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':nom' => $nouveau_nom,
    ':id' => $id
]);

echo "Utilisateur mis à jour.";
/*
Explication :

    UPDATE permet de modifier un enregistrement.
    :nom et :id sont des paramètres sécurisés.
*/
// ********************************************************************************************************************
/*
 *  SUPPRIMER DES DONNÉES DANS UNE BASE DE DONNÉES
 */
$id = 2; // Supprime l'utilisateur avec l'ID 2

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);

echo "Utilisateur supprimé.";
/*
Explication :

    DELETE permet de supprimer une ligne de la table.
    L’id est passé comme paramètre pour éviter les injections SQL.
*/
// ********************************************************************************************************************