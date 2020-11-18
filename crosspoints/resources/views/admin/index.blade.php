@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="login-header card-header d-flex justify-content-center">
        <h2>Welkom, admin {{auth()->user()->name}}</h2>
        </div>
        <div class="login-body card-body d-flex justify-content-center">
            <a href="{{route('problem')}}"><button class="admin-main-btn">Voeg ongewenst gedrag toe</button></a>
            <a href="{{route('company')}}"><button class="admin-main-btn">Voeg Bedrijf toe</button></a>
            <a href="{{route('registerVP')}}"><button class="admin-main-btn">Registreer Vertrouwenspersoon</button></a>
        </div>
    </div>
@endsection
