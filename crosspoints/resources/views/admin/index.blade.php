@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <h2>Welkom, admin {{auth()->user()->name}}</h2>
        <div class="links">
            <a href="{{route('problem')}}"><button class="btn btn-primary">Voeg soorten ongewenst gedrag toe</button></a>
            <a href="{{route('company')}}"><button class="btn btn-primary">Voeg bedrijven toe</button></a>
            <a href="{{route('registerVP')}}"><button class="btn btn-primary">Registreer een nieuw vertrouwenspersoon</button></a>
        </div>
    </div>
@endsection
