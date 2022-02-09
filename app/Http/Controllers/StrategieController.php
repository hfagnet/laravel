<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Strategie;
use App\Models\Factory;
use App\Models\factureLine;

class StrategieController extends BaseController
{
    public function show()
    {
        $usine = new Factory();
        $voiture1 = $usine->construireVoiture('renault');
        $voiture2 = $usine->construireVoiture('opel');

        $factureLine1 = new factureLine($voiture1);
        $factureLine2 = new factureLine($voiture2);

        return view('strategie', ['opel' => $factureLine2->getFactureLine(), 'renault' => $factureLine1->getFactureLine()]);
    }
}
