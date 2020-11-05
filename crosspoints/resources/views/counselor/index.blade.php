@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Welkom, vertrouwenspersoon {{auth()->user()->name}}</h2>
    </div>
@endsection
