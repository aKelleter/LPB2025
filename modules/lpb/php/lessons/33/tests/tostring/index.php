<?php
class Voiture {
    public $marque;

    public function __construct($marque) {
        $this->marque = $marque;
    }

    public function __toString() {
        return "Voiture : $this->marque";
    }
}

$maVoiture = new Voiture("Toyota");
echo $maVoiture; // Affiche : Voiture : Toyota