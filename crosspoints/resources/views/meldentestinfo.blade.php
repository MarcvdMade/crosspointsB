@extends('layouts.app')

@section('content')
<style>
    p {
        color: #0D7377;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">Informatie voor de test</h3>

                <div class="card-body login-body">
                    <h2 class="text-center">Anonimiteit</h2>
                        <p>
                            Tijdens uw test stellen wij uw anonimiteit als prioriteit nummer 1.
                            Het is onmogelijk voor de eigenaren en andere gebruikers van de site om uw antwoorden te zien zonder dat u er toestemming voor geeft.
                            De test is volledig op uw eigen apparaat en uw antwoorden worden nergens opgeslagen.
                        </p>
                    <h2 class="text-center">Uw dagboek</h2>
                        <p>
                            Als U uw resultaat wel wilt opslaan, geven wij de optie hiervoor aan het einde van de test. Dit wordt opgeslagen in uw persoonlijke dagboek
                            waar uw vertrouwenspersoon niet bij kan zonder uw toestemming. Dit kunt u gebruiken in een eventueel gesprek met uw vertrouwenspersoon.
                            Wij raden u altijd aan om een melding te maken na de test als u deze wilt gebruiken in een gesprek om meer informatie te vergaren voor uw gesprek.
                        </p>
                </div>
                <div class="card-body login-body">
                    <a href="{{route('meldentestselect')}}"><button class="btn btn-primary">Start de meldentest</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
