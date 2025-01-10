<?php
class Animal {
    public function faireDuBruit() {
        return "L'animal fait un bruit.<br>";
    }
}

class Chien extends Animal {
    public function faireDuBruit() {
        return "Le chien aboie.<br>";
    }
}

$monChien = new Chien();
$monAnimal = new Animal();

echo $monChien->faireDuBruit(); // Affiche : Le chien aboie.
echo $monAnimal->faireDuBruit(); // Affiche : L'animal fait un bruit.
