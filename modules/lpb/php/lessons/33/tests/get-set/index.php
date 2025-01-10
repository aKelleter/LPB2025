<?php
class Voiture {
    private $data = [];

    public function __get($name) {
        return $this->data[$name] ?? "<p>Propriété inexistante.</p>";
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$maVoiture = new Voiture();
echo $maVoiture->modele; // Affiche : Propriété inexistante.
$maVoiture->modele = "Tesla Model S";
echo $maVoiture->modele; // Affiche : Tesla Model S