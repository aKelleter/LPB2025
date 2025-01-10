<?php
class Voiture {
    public function __invoke() {
        return "L'objet Voiture est invoqué.";
    }
}

$maVoiture = new Voiture();
echo $maVoiture(); // Affiche : L'objet Voiture est invoqué.