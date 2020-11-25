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
            <a href="{{route('problem')}}">Voeg Ongewenst Gedrag Toe</a>
            <a href="{{route('company')}}">Voeg Bedrijf toe</a>
            <a href="{{route('counselors')}}">Overzicht Vertrouwenspersoon</a>
            <a href="{{route('admins')}}">Overzicht Administrators</a>
            <a href="">Bewerk Meldentest</a>
            </div>
        </div>
        <div class="login-header card-header">
            <div class="text-center">
                <h2>Welkom, admin {{auth()->user()->name}}</h2>
            </div>
            <div class="d-flex justify-content-center">
                <button id="menu-button" class="open-sidenav-btn" onclick="openNav()">Open Menu</button>
                <button id="menu-button" class="info-meerlezen-btn">Open Menu</button>
            </div>
        </div>
    </div>
@endsection
