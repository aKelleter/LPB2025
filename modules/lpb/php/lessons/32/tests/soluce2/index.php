<?php
 ob_start(); // Démarre la temporisation de sortie
 echo "Affichage d'un texte avant l'envoi d'un header (et donc envoi d'un header)<br>";
 // Attendre 2 secondes pour bien montrer que le contenu est stocké dans un tampon et pas affiché
 sleep(2);
 header("Location: https://www.example.com"); // Cela fonctionnera
 ob_end_flush(); // Envoie le contenu du tampon de sortie et stop la temporisation de sortie   