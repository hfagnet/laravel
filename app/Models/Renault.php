<?php

namespace App\Models;

class Renault extends Voiture{

     public function __construct($nom, $prix) { 
         parent::__construct($nom, $prix);
     }

     public function getMarque()
     {
         return 'Renault';
     }

     public function getPrix()
     {
         return 10000;
     }
  }

  ?>