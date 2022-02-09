<?php

namespace App\Models;

class Opel extends Voiture{

     public function __construct($nom, $prix) { 
         parent::__construct($nom, $prix);
     }

     public function getNom()
     {
         return 'UneOpel';
     }

     public function getPrix()
     {
         return 12500;
     }

     public function getMarque()
     {
         return 'Opel';
     }
  }

  ?>