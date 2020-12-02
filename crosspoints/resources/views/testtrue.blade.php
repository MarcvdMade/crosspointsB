@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">"Moet ik me melden?" Test</h3>
                <div class="card-body login-body">
                    <h4 class="text-center">Ja, wij raden u aan om te melden.</h4>
                    <div class="row justify-content-center">
                        <button class="melden-yesno-button"><a href="{{route('home')}}" class="melden-yesno-button-link"> Terug</a></button>
                        <button class="melden-yesno-button"><a href="{{route('home')}}" class="melden-yesno-button-link">Melden</a></button>
                    </div>
                    <p class="text-muted text-center">Als u besluit toch niet te melden kan dat via de "terug" knop hierboven.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
