@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">"Moet ik me melden?" Test</h3>
                <div class="card-body login-body">
                    <h4 class="text-center">Nee, wij raden u een andere manier van aanpak aan. Ook raden wij u aan de <a href="{{route('information')}}">Info pagina</a> te lezen.</h4>
                    <div class="row justify-content-center">
                        <button class="melden-yesno-button"><a href="{{route('home')}}" class="melden-yesno-button-link">Melden</a></button>
                        <button class="melden-yesno-button"><a href="{{route('home')}}" class="melden-yesno-button-link"> Terug</a></button>
                    </div>
                    <p class="text-muted text-center">Als u toch wilt melden kan dat nogsteeds via de "melden" knop hierboven.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
