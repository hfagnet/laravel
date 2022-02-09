<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Factory;
use App\Models\Voiture;
use App\Models\Renault;
use App\Models\Opel;

class FactoryController extends Controller
{
    public function show()
    {
        $opel = Factory::construireVoiture('opel');
        $renault = Factory::construireVoiture('renault');
        return view('factory', ['opel' => $opel, 'renault' => $renault]);
    }
}