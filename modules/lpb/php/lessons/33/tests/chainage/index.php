<?php
class Voiture {
    public $marque;

    public function setMarque($marque) {
        $this->marque = $marque;
        return $this; // Retourne l'objet courant pour permettre le chaînage
    }

    public function afficherMarque() {
        return $this->marque;
    }
}

$maVoiture = new Voiture();
echo $maVoiture->setMarque("Tesla")->afficherMarque(); // Affiche : Tesla
