<?php
declare(strict_types=1);

/**
 * Fonction de connexion à la base de données
 * 
 * @return mixed 
 * @throws Exception 
 */
function dbConnect(): mixed
{
    try {
        // Création de la connexion PDO
        $dsn = 'mysql:host='.SERVER_NAME.';dbname='.DB_NAME.';charset=utf8mb4';        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Mode d'erreur en exception
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération des données par défaut
            PDO::ATTR_EMULATE_PREPARES => false, // Désactiver l'émulation des requêtes préparées
        ];
        
        $pdo = new PDO($dsn, USER_NAME, USER_PWD, $options);

        // Retour de la connexion
        return  $pdo;

    } catch (PDOException $e) {
        // Gestion des erreurs de connexion
        throw new Exception("Erreur lors de la connexion à la base de données : " . $e->getMessage());
    } catch (Exception $e) {
        // Gestion des autres erreurs éventuelles
        echo "Une erreur inattendue s'est produite : " . $e->getMessage();
    }

}

/**
 * Fonction de connexion avec une base de données
 * 
 * @param string $email 
 * @param string $pwd 
 * @return bool 
 */
function loginWithDatabase(string $email, string $pwd): bool
{
    try {
            $pdo = dbConnect();
            $query = $pdo->prepare('SELECT * FROM users WHERE email = :email AND pwd = :pwd');
            $query->execute(['email' => $email, 'pwd' => $pwd]);
            $user = $query->fetch();
            if ($user)
            {
                $_SESSION['user']['email'] = $user['email'];
                $_SESSION['user']['time'] = time();
                $_SESSION['user']['ip'] = $_SERVER['REMOTE_ADDR'];
                $_SESSION['user']['ua'] = $_SERVER['HTTP_USER_AGENT'];

                // Fermeture de la connection
                $pdo = null;
                $query = null;

                return true;
            }

            // Fermeture de la connection
            $pdo = null;
            $query = null;

            return false;

    } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
    }    
}

