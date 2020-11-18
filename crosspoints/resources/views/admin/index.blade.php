@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="mySidenav" class="sidenav">
            <div class="sideNav-links">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{route('problem')}}">Voeg Ongewenst Gedrag Toe</a>
            <a href="{{route('company')}}">Voeg Bedrijf toe</a>
            <a href="{{route('registerVP')}}">Registreer Vertrouwenspersoon</a>
            <a href="">Registreer Administrator</a>
            <a href="">Bewerk Meldentest</a>
            </div>
        </div>
        <div>
            <div class="login-header card-header d-flex">
                <i class="fa fa-bars" onclick="openNav()" style="font-size: 30px; cursor: pointer"></i>
                <h2>Welkom, admin {{auth()->user()->name}}</h2>
            </div>
        </div>
    </div>
@endsection

<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
    function openNav() {
        if (window.innerWidth < 500) {
            document.getElementById("mySidenav").style.width = "100%";
        } else {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
        if (window.innerWidth < 500) {
            document.getElementById("mySidenav").style.width = "0";
        } else {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    }
</script>
