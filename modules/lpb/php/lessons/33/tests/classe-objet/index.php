<?php
class Voiture {
    public $marque;
    public $couleur;

    public function demarrer() {
        return "La voiture démarre.";
    }
}

// Création d'un objet
$maVoiture = new Voiture();
$maVoiture->marque = "Toyota";
$maVoiture->couleur = "Rouge";

echo $maVoiture->demarrer(); // Affiche : La voiture démarre.