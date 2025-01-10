<?php
class Vehicule {
    public $type;

    public function demarrer() {
        return "Le véhicule démarre.<br>";
    }
}

class Moto extends Vehicule {
    public function faireWheelie() {
        return "La moto fait un wheelie !<br>";
    }
}

$maMoto = new Moto();
$maMoto->type = "Deux-roues";
echo $maMoto->demarrer(); // Affiche : Le véhicule démarre.
echo $maMoto->faireWheelie(); // Affiche : La moto fait un wheelie !