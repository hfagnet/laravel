<?php

namespace App\Models;
use App\Models\Factory;
use App\Models\Concession;
use App\Models\Facture;

class Facade
{
    public function __construct(){}
    
    public function commander(){
        //Création du tableau à retourner au final
        $tab = [];

        //Création de la factory + création de 2 voitures
        $factory = new Factory();
        $voiture1 = $factory->construireVoiture('opel');
        $voiture2 = $factory->construireVoiture('renault');

        //Création de la concession + ajout des deux voitures
        $concession= new Concession();
        $concession->ajoutVoiture($voiture1);
        $concession->ajoutVoiture($voiture2);

        //Créationd e la facture + calcul du prix total
        $facture= new Facture();
        $facture->ajoutPrixVoiture($voiture1);
        $facture->ajoutPrixVoiture($voiture2);

        //On met les objets dans le tableau à retourner
        $tab['factory']=$factory;
        $tab['concession']=$concession;
        $tab['facture']=$facture;
        
        return $tab;
    }
}