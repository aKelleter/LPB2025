<?php
interface Volant {
    public function voler();
}

class Avion implements Volant {
    public function voler() {
        return "L'avion vole.";
    }
}

$monAvion = new Avion();
echo $monAvion->voler(); // Affiche : L'avion vole.
