<?php

namespace App\Models;


class Facture
{
    private $facture=0;

    public function __construct(){}

    public function ajoutPrixVoiture($voiture){
        $this->facture += $voiture->getPrix();
    }

    public function montrerFacture(){
        return $this->facture;
    }

}