@extends('layouts.app')

@section('content')
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div id="mySidenav" class="sidenav">
            <div class="sideNav-links">
                <a href="javascript:void(0)" id="close-btn" class="closebtn">&times;</a>
                <a href="{{route('meldingen')}}">Gemaakte meldingen</a>
                <a href="{{route('gebruikers')}}">Gebruikers</a>
                <a href="">Gebruiker toevoegen</a>
            </div>
        </div>
        <div class="login-header card-header">
            <div class="text-center">
                <h2>Welkom, vertrouwens persoon {{auth()->user()->name}}</h2>
                <p>Via het menu kunt u naar belangrijke gegevens komen. Hier krijgt u deze overzien, aanpassen en verwijderen.</p>
            </div>
            <div class="d-flex justify-content-center">
                <button id="menu-button" class="info-meerlezen-btn">Open Menu</button>
            </div>
        </div>
    </div>
@endsection
