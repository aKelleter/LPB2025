<?php
class Voiture {
    public function __call($name, $arguments) {
        return "<p>La méthode $name() n'existe pas.</p>";
    }

    public static function __callStatic($name, $arguments) {
        return "<p>La méthode statique $name() n'existe pas.</p>";
    }
}

$maVoiture = new Voiture();
echo $maVoiture->demarrer(); // Affiche : La méthode demarrer() n'existe pas.
echo Voiture::arreter(); // Affiche : La méthode statique arreter() n'existe pas.