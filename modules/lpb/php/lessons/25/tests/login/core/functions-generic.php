<?php
declare(strict_types=1);

/**
 * Fonction de connexion avec un tableau
 * 
 * @param array $users 
 * @param string $email 
 * @param string $pwd 
 * @return bool 
 */
function loginWithArray(array $users, string $email, string $pwd): bool
{
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
 * Fonction de déconnexion
 * 
 * @return void 
 */
function logout(): void
{
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
function checkConnexion(): bool
{
    if (!isset($_SESSION['user']))
    {
        return false;
    }else
        return true;
}

/**
 * Aprint($array, $info = null, $type = PR) : 
 * 
 * Display an array variable in a more readable way
 * 
 * @param mixed $array 
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @param string $info
 *
 * @return void 
 */
function Aprint(array $array, string $type = PR, string $info = ''): void {

    if($type == PR)
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        print_r($array);
        echo '</pre>';
    }elseif($type == VD)
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        var_dump($array);
        echo '</pre>';
    }    
}


