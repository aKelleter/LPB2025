<?php
class Voiture {
    public $marque;

    public function __construct($marque) {
        $this->marque = $marque;
    }

    public function __destruct() {
        echo "<br>L'objet Voiture est détruit.<br>";
    }
}

$maVoiture = new Voiture("BMW");
echo $maVoiture->marque; // Affiche : BMW