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
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{route('problem')}}">Voeg Ongewenst Gedrag Toe</a>
            <a href="{{route('company')}}">Voeg Bedrijf toe</a>
            <a href="{{route('registerVP')}}">Registreer Vertrouwenspersoon</a>
            <a href="{{route('admins')}}">Overzicht Administrators</a>
            <a href="">Bewerk Meldentest</a>
            </div>
        </div>
        <div class="login-header card-header">
            <div class="text-center">
                <h2>Welkom, admin {{auth()->user()->name}}</h2>
                <p>Via het menu kunt u naar belangrijke gegevens komen. Hier krijgt u deze overzien, aanpassen en verwijderen.</p>
            </div>
            <div class="d-flex justify-content-center">
                <button id="menu-button" class="info-meerlezen-btn" onclick="openNav()">Open Menu</button>
            </div>
        </div>
    </div>
@endsection

<script>
    let navOpen
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
    function openNav() {
        if (navOpen === true) {
            closeNav()
        } else {
            navOpen = true

            if (window.innerWidth < 500) {
                document.getElementById("mySidenav").style.width = "100%";
            } else {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                document.getElementById("menu-button").innerHTML = "Sluit Menu";
            }
        }

    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
        navOpen = false

        if (window.innerWidth < 500) {
            document.getElementById("mySidenav").style.width = "0";
        } else {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("menu-button").innerHTML = "Open Menu";
        }
    }
</script>
