@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Informatie</h2>
            </div>
            <div class="card-body">
                <p> Wij willen ongewenst gedrag op de werkvloer tegen gaan. Wilt u meer weten?</p>
                <a href="{{route('about')}}"> <button class="btn btn-primary"> Klik hier </button> </a>
            </div>
        </div>
    </div>
@endsection
