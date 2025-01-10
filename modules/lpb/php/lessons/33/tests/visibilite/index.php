<?php
class Voiture {
    private $marque;

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getMarque() {
        return $this->marque;
    }
}

$maVoiture = new Voiture();
$maVoiture->setMarque("Tesla");
echo $maVoiture->getMarque(); // Affiche : Tesla
