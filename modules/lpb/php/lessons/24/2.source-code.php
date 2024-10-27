<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
//echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>'; // Ici je suis obligé de ne pas exécuter cette ligne avant de déclarer les cookies 
//----------------------------------------------------------------------------------------------------
// Ne pas oublier de créer les cookies avant d'afficher à l'écran
setcookie('userId', '45685'); // Il est plus que Conseillé de mettre une durée de vie
setcookie('userId', '45685', time()+3600*24, '/', '', true, true);
setcookie('userPref', 'dark_theme', time()+3600*24, '/', '', true, true);    
// Maintenant on peut afficher à l'écran
echol('Exo1 - Creér nos premiers cookies');
echo 'userId : ' . $_COOKIE['userId'] . '<br>';
DBGPrint($_COOKIE, 'PR', '$_COOKIE : ');
hr();
//----------------------------------------------------------------------------------------------------
echol('Exo2 - Récupérer la valeur d\'un cookie'); 
if(isset($_COOKIE['userId'])) {
    echo 'La valeur du cookie userId est : '.$_COOKIE['userId'];
} else {
    echo 'Le cookie userId n\'existe pas';
}  
hr();
//----------------------------------------------------------------------------------------------------
echol('Exo3 - Modifier la valeur d\'un cookie et le supprimer');
// Modifier la valeur d'un cookie
setcookie('userId', '123789', time()+3600*24, '/', '', true, true);
DBGPrint($_COOKIE, 'PR', '$_COOKIE : ');

// Supprimer un cookie
setcookie('userId');
unset($_COOKIE['userId']); // Obligatoire à cause de la durée de vie du cookie
// ou
setcookie('userPref');
unset($_COOKIE['userPref']); // Obligatoire à cause de la durée de vie du cookie

echol('Les cookie userIds et userPref ont été supprimé');
DBGPrint($_COOKIE, 'PR', '$_COOKIE : ');
hr();
//----------------------------------------------------------------------------------------------------
