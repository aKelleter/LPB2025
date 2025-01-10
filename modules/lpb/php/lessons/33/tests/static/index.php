<?php
class Voiture {
    const TYPE = "Véhicule";
    public static function description() {
        return "<p>C'est une voiture.</p>";
    }
}

echo Voiture::TYPE; // Affiche : Véhicule
echo Voiture::description(); // Affiche : C'est une voiture.