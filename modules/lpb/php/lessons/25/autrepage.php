<?php
session_start();
echo 'Nom : ' . $_SESSION['nom'] . '<br>';
echo 'Prénom : ' . $_SESSION['prenom'] . '<br>';
echo 'Age : ' . $_SESSION['age'] . '<br>';
