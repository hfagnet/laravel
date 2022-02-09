<?php

namespace App\Models;


class Sujet
{
    public $lesObserveurs=[];

    public function __construct(){}

    public function ajoutObserveur($observeur)
    {
        $this->lesObserveurs[]=$observeur;
    }

    public function supprimer()
    {
        unset($this->lesObserveurs[1]);
    }
    
    public function notifier()
    {
        foreach($this->lesObserveurs as $unObserver)
        {
            $unObserver->incrementer();
        }
    }
}