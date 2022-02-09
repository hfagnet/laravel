<?php

namespace App\Models;

class Factory {

    public function __construct() { 
        
    }

    public static function getInstance() {

        if(is_null(self::$_instance)) {
            self::$_instance = new Factory();
        }

        return self::$_instance;
    }

    public static function construireVoiture($marque)
    {
        if ($marque === 'opel')
        {
            $laVoiture = new Opel('UneOpel',15000);
        }
        elseif ($marque === 'renault')
        {
            $laVoiture = new Renault('UneRenault',12000);
        }
        
        return $laVoiture;
    }
  }

  ?>