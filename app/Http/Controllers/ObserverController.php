<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sujet;
use App\Models\Observer;

class ObserverController extends Controller
{

    public function show(){

        //Création du premier sujet
        $sujet1 = new Sujet();

        //Création des deux observeurs
        $observeur1 = new Observer();
        $observeur2 = new Observer();

        //Association des observeur au sujet 1
        $sujet1->ajoutObserveur($observeur1);
        $sujet1->ajoutObserveur($observeur2);

        //Opérations
        $sujet1->notifier();
        $sujet1->supprimer();
        $sujet1->notifier();

        //Création du deuxième sujet
        $sujet2 = new Sujet();

        //Dissociation du dernier observeur du sujet 1
        $sujet1->supprimer();

        //Association des observeur au sujet 2
        $sujet2->ajoutObserveur($observeur1);
        $sujet2->ajoutObserveur($observeur2);

        $sujet2->notifier();

        return view('observer', ["observeur1"=>$observeur1, "observeur2"=>$observeur2]);
    }
}