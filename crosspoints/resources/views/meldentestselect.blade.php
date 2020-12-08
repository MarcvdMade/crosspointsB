@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>Selecteer welke vormen van ongewenst gedrag u mee in aanraking bent gekomen.</h2>
                <p class="text-muted">U kunt meerdere vormen selecteren door de control knop (ctrl) ingedrukt te houden tijdens het selecteren</p>
                <form method="post" action="{{route('meldentestform')}}">
                    @csrf
                    <select name="select[]" class="form-control form-control-lg" multiple>
                            <option value="Pesten">Pesten</option>
                            <option value="Agressie">Agressie</option>
                            <option value="Disciminatie">Disciminatie</option>
                            <option value="Seksuele intimidatie">Seksuele intimidatie</option>
                            <option value="Spanning op de werkvloer">Spanning op de werkvloer</option>
                            <option value="Machtsmisbruik">Machtsmisbruik</option>
                            <option value="Constante kritiek">Constante kritiek</option>
                    </select>
                    <button type="submit" class="melden-yesno-button w-100 ml-auto">Doorgaan</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
