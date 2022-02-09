@extends("base")
@section('contenu')
<p>Compteur Observeur 1 :<strong> {{ $observeur1->display() }}</strong></p>
<p>// Son compteur est à 3 car il a reçu les 3 notifications (2 du sujet1 et 1 du sujet2)</p>

<p>Compteur Observeur 2 : <strong>{{ $observeur2->display() }}</strong></p>
<p>// Son compteur est à 2 car il n'a reçu que 2 notifications (1 du sujet1 et 1 du sujet2) étant donné qu'il a été supprimé avant la deuxième notification du sujet1</p>


        
@endsection
@section('title')
    Observer
@endsection
