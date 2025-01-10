<?php
final class Voiture {
    public function demarrer() {
        return "La voiture démarre.";
    }
}

class Velo {
    public function regonfler(){
        return '<p>Le vélo est regonflé.</p>';
    }
    
    final public function revendre(){
        return '<p>Le vélo est revendu.</p>';
    }
}

//----------------------------------------


// Erreur : Impossible d'hériter d'une classe finale
class VoitureElectrique extends Voiture {
    public function recharger() {
        return "La voiture électrique se recharge.";
    }
}


// Impossible de surcharger une méthode finale
class VeloDeCourse extends Velo {
    public function regonfler(){
        return '<p>Le vélo de course est regonflé.</p>';
    }
    
    // Erreur : Impossible de surcharger une méthode finale
    public function revendre(){
        return '<p>Le vélo de course est revendu.</p>';
    }
}
