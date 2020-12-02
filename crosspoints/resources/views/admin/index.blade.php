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
            <a href="{{route('problem')}}" class="sidenav-text">Voeg Ongewenst Gedrag Toe</a>
            <a href="{{route('company')}}" class="sidenav-text">Voeg Bedrijf toe</a>
            <a href="{{route('counselors')}}" class="sidenav-text">Overzicht Vertrouwenspersoon</a>
            <a href="{{route('admins')}}" class="sidenav-text">Overzicht Administrators</a>
            <a href="" class="sidenav-text">Bewerk Meldentest</a>
            </div>
        </div>
        <div class="login-header card-header">
            <div class="text-center">
                <h2>Welkom, admin {{auth()->user()->name}}</h2>
            </div>
            <div class="d-flex justify-content-center">
                <button id="menu-button" class="open-sidenav-btn">Open Menu</button>
            </div>
        </div>
    </div>
@endsection
