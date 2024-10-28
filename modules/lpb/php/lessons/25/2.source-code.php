<?php
//----------------------------------------------------------------------------------------------------
session_start();
if(!isset($_SESSION['R'])){
    echo 'La session a probablement expiré. Veuillez vous <a href="index.php">reconnecter</a>.';
    die();
}else{
    require_once($_SESSION['R'].'app/fct.php');
}
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : Récupérer l'ID de sessions");
// Avec la fonction session_id()
echo("session_id() : ".session_id().'<br>');
echo("session_name() : ".session_name().'<br>');
echo("session_cache_expire() : ".session_cache_expire().'<br>');

// Avec la superglobale $_SESSION
if(isset($_COOKIE['PHPSESSID'])){
    echo 'ID de session (récupéré via $_COOKIE) : ' . $_COOKIE['PHPSESSID'];
}
hr();
//----------------------------------------------------------------------------------------------------  
echol("Exo2 : Créer et récupérer des variables de session");

// Créer des variables de session
$_SESSION['nom'] = 'Doe';
$_SESSION['prenom'] = 'John';
$_SESSION['age'] = 30;

// Récupérer des variables de session
echo 'Nom : ' . $_SESSION['nom'] . '<br>';
echo 'Prénom : ' . $_SESSION['prenom'] . '<br>';
echo 'Age : ' . $_SESSION['age'] . '<br>';
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo3 : Supprimer des variables de session");

// Création d'une nouvelle variable de session
$_SESSION['job'] = 'Développeur';
echo 'Job : ' . $_SESSION['job'] . '<br>';

// Supprimer la variable  de session "job"
unset($_SESSION['job']);
echo 'Nom : ' . $_SESSION['nom'] . '<br>';
echo 'Prénom : ' . $_SESSION['prenom'] . '<br>';
echo 'Age : ' . $_SESSION['age'] . '<br>';

if(isset($_SESSION['job'])){
    echo 'Job : ' . $_SESSION['job'] . '<br>';
}else{
    echo 'La variable de session "job" a bien été supprimée.<br>';
}
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo4 : Détruire une session");
session_destroy();
echo 'La session a été détruite.<br>';
DBGPrint($_SESSION);
echo 'Exécution de session_unset().<br>';
session_unset();
DBGPrint($_SESSION);
hr();
//----------------------------------------------------------------------------------------------------