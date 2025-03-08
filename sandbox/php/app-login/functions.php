<?php
declare(strict_types=1);

/**
 * Fonction de connexion à la base de données
 * @return object 
 */
function connectPDO(): mixed {
    //require_once 'conf.php';
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
 * Fonction de connexion avec un tableau
 * 
 * @param array $users 
 * @param string $email 
 * @param string $pwd 
 * @return bool 
 */
function loginWithArray(array $users, string $email, string $pwd): bool {
    foreach ($users as $user)
    {
        if ($user['email'] === $email && $user['pwd'] === $pwd)
        {
            $_SESSION['user']['email'] = $user['email'];
            $_SESSION['user']['time'] = time();
            $_SESSION['user']['ip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['user']['ua'] = $_SERVER['HTTP_USER_AGENT'];
            return true;
        }
    }
    return false;
}

/**
 * Fonction de connexion avec la base de données
 * 
 * @param object $pdo 
 * @param string $email 
 * @param string $pwd 
 * @return bool 
 */
function loginWithDataBase(object $pdo, string $email, string $pwd): bool {
    
    //$passwd_hashed = password_hash($pwd, PASSWORD_DEFAULT);
    
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    // Si l'utilisateur existe et que le mot de passe est correct
    if ($user && password_verify($pwd, $user['passwd']))
    {
        $_SESSION['user']['email'] = $user['email'];
        $_SESSION['user']['time'] = time();
        $_SESSION['user']['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['user']['ua'] = $_SERVER['HTTP_USER_AGENT'];
        return true;
    }

    return false;
}
   


/**
 * Fonction de déconnexion
 * 
 * @return void 
 */
function logout(): void {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

/**
 * Fonction de vérification de connexion
 * 
 * @return void 
 */
function checkConnexion(): bool {
    return (isset($_SESSION['user']) && !empty($_SESSION['user'])) ? true : false;    
}

/**
 * Aprint($array, $info = null, $type = PR) : 
 * 
 * Display an array variable in a more readable way
 * 
 * @param mixed $var 
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @param string $info
 *
 * @return void 
 */
function Aprint(mixed $var, string $type = PR, string $info = ''): void {

    if($type == PR)
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        print_r($var);
        echo '</pre>';
    }elseif($type == VD)
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        var_dump($var);
        echo '</pre>';
    }    
}

/**
 * Fonction de génération du code HTML d'affichage des données de l'utilisateur
 * 
 * @param array $user 
 * @return string 
 */
function HTMLUserDatas(array $user): string {
    
    $string = '';
    $string .= '<p>Bonjour '.$user['email'].'</p>';
    $string .= '<p>Voici les informations vous concernant : </p>';
    $string .= '<ul>';
    $string .= '<li>Adresse email : '.$user['email'].'</li>';
    $string .= '<li>Heure de connexion : '.date('d/m/Y H:i:s', $user['time']).'</li>';
    $string .= '<li>Adresse IP : '.$user['ip'].'</li>';
    $string .= '<li>User Agent : '.$user['ua'].'</li>';
    $string .= '</ul>';

    return $string;
}


