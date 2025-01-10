<?php
abstract class Vehicule {
    abstract public function demarrer();
}

class Voiture extends Vehicule {
    public function demarrer() {
        return "La voiture démarre.";
    }
}

$maVoiture = new Voiture();
echo $maVoiture->demarrer(); // Affiche : La voiture démarre.