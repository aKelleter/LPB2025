<?php
declare(strict_types=1);

/**
 * Fonction de connexion à la base de données
 * @return object 
 */
function connectPDO(): mixed {    
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        die(); 
    }
    
}

/**
 * Requête de sélection de tous les enregistrements avec les champs spécifiés
 * 
 * @param object $pdo 
 * @param string $table 
 * @param array $fields 
 * @return array 
 */
function SQLSelectAll(string $table, array $fields = ['*']): array {
    $pdo = connectPDO();
    //$sql = "SELECT * FROM $table";
    $sql = "SELECT ".implode(', ', $fields)." FROM $table ORDER BY id DESC";
    $req = $pdo->prepare($sql);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Requête de sélection de tous les enregistrements avec les champs spécifiés et une clause WHERE
 * 
 * @param object $pdo 
 * @param string $table 
 * @param array $fields 
 * @param array $where 
 * @return array 
 */
function SQLSelectWhere(string $table, array $fields = ['*'], array $where = []): array {
    $pdo = connectPDO();
    $sql = "SELECT ".implode(', ', $fields)." FROM $table WHERE ".implode(' AND ', array_map(fn($k) => "$k = :$k", array_keys($where)));
    $req = $pdo->prepare($sql);
    $req->execute($where);
    return $req->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Requête de sélection de tous les enregistrements avec les champs spécifiés et une clause WHERE LIKE
 * 
 * @param object $pdo 
 * @param string $table 
 * @param array $fields 
 * @param array $where 
 * @return array 
 */
function SQLSelectWhereLike(string $table, array $fields = ['*'], array $where = []): array {
    $pdo = connectPDO();
    $sql = "SELECT ".implode(', ', $fields)." FROM $table WHERE ".implode(' AND ', array_map(fn($k) => "$k LIKE :$k", array_keys($where)));
    $req = $pdo->prepare($sql);
    $req->execute($where);
    return $req->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Requête d'insertion d'un article
 * 
 * @param string $titre 
 * @param string $contenu 
 * @return bool 
 */
function SQLInsertArticle(string $titre, string $contenu): bool {
    try {
        $pdo = connectPDO();
        $req = $pdo->prepare("INSERT INTO articles (titre, contenu) VALUES (:titre, :contenu)");
        $req->execute(['titre' => $titre, 'contenu' => $contenu]);

        // Vérification de l'insertion
        if($req->rowCount() > 0) {
            return true;
        }else{
            return false;
        }

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        die(); 
    }   
}

/**
 * Requête de suppression d'un article
 * 
 * @param int $id 
 * @return bool 
 */
function SQLDeleteArticle(int $id): bool {
    
    try {
        $pdo = connectPDO();
        $table = 'articles';

        $req = $pdo->prepare("DELETE FROM $table WHERE id = :id");
        $req->execute(['id' => $id]);

        // Vérification de la suppression
        if($req->rowCount() > 0) {
            return true;
        }else{
            return false;
        }

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        die(); 
    }   
}

/**
 * Requête de chargement d'un article par son ID
 * 
 * @param mixed $id 
 * @return array 
 */
function SQLLoadArticleByID(int $id): array {
    try {        
        $pdo = connectPDO();
        $sql = "SELECT * FROM articles WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(['id' => $id]);
        return $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        die(); 
    }
}

/**
 * Requête de mise à jour d'un article
 * 
 * @param string $titre 
 * @param string $contenu 
 * @return bool 
 */
function SQLUpdateArticle(int $id, string $titre, string $contenu): bool {

    try {
        $pdo = connectPDO();
        $req = $pdo->prepare("UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id");
        $result = $req->execute(['titre' => $titre, 'contenu' => $contenu, 'id' => $id]);

        // Vérification de la mise à jour
        if ($result) {
            return true; // La requête s'est exécutée sans erreur
        } else {
            return false; // Une erreur s'est produite
        }

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        die(); 
    }

}
