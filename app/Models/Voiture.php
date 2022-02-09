<?php

namespace App\Models;

class Voiture {
 
    private $nom;
    private $prix;

    public function __construct($nom, $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function getNom(){
        return $this->nom;
    }
}
?>