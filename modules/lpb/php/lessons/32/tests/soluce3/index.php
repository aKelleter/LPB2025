<?php
// echo "Affichage d'un texte avant l'envoi d'un header (et donc envoi d'un header)<br>";
// Si les en-têtes n'ont pas encore été envoyés, on peut utiliser header()
if (!headers_sent()) {
    header("Location: https://www.example.com");
    exit;
} else {
    echo "Les en-têtes ont déjà été envoyés.";
}
