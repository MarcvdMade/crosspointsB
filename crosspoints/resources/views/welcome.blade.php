@extends('layouts.app')
@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success mt-3 text-center">
            <strong>{{$message}}</strong>
        </div>
    @endif
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="card ">
                    <div class="card-header login-header">
                        <h2>Over ons</h2>
                    </div>
                    <div class="card-body login-body">
                        <p>Wilt u meer weten over deze applicatie?</p>
                        <a href="{{route('about')}}">
                            <button class="btn btn-primary info-meerlezen-btn"> Klik hier</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header login-header">
                        <h2>Informatie over ongewenst gedrag</h2>
                    </div>
                    <div class="card-body login-body">
                        <p> Wij willen ongewenst gedrag op de werkvloer tegen gaan. Wilt u meer weten?</p>
                        <a href="{{route('information')}}">
                            <button class="btn btn-primary info-meerlezen-btn"> Klik hier</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header login-header">
                        <h2>Weet u niet of u moet melden.</h2>
                    </div>
                    <div class="card-body login-body">
                        <p>Doe dan nu de test</p>
                        <a href="{{route('meldentest')}}">
                            <button class="btn btn-primary info-meerlezen-btn"> Klik hier</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header login-header">
                        <h2>Meld ongewenst gedrag?</h2>
                    </div>
                    <div class="card-body login-body">
                        <p>Hier kunt u uw probleem melden. Daarna neemt een vertrouwens persoon contact op.</p>
                        <a href="{{route('meld')}}">
                            <button class="btn btn-primary info-meerlezen-btn"> Klik hier</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
@endsection
