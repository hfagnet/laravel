@extends("base")
@section('contenu')
<h4>Les voitures listées avec itération :</h4>
<ul>
<?php
    while($agg->hasnext()) {
        echo '<li>';
        echo get_class($agg->next());
        echo '</li>';
    }
?>
</ul>
@endsection
@section('title')
    Itération
@endsection