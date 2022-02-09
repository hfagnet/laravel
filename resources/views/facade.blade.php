
@extends("base")
@section('contenu')
<p>La factory : {{ get_class($factory) }}</p>
<p>La concession : {{ get_class($concession) }}</p>
<h4>Les voitures :</h4>
<ul>
<?php
foreach($concession->getVoitures() as $voiture)
{
    echo '<li>';
    echo $voiture->getNom();
    echo '</li>';
}
?>
</ul>
<p>Facture : {{ $facture->montrerFacture() }}</p>
@endsection
@section('title')
    Facade
@endsection