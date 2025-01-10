<?php
trait Salutation {
    public function direBonjour() {
        return "Bonjour !";
    }
}

class Personne {
    use Salutation;
}

$personne = new Personne();
echo $personne->direBonjour(); // Affiche : Bonjour !