@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Welkom, admin {{auth()->user()->name}}</h2>
        <div class="links">
            <a class="button" href="{{route('problem')}}">Soorten ongewenst gedrag toevoegen</a>
        </div>
    </div>
@endsection
