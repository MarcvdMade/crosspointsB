@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Profiel van {{$user->name}}</h2>
        <div class="container-fluid">
            @can('is_admin')
                <div class="card">
                    <p class="card-header">U bent een admin!</p>
                    <a class="card-body" href="{{route('admin')}}">Klik hier om naar de admin pagina te gaan</a>
                </div>
            @endcan

            @can('is_counselor')
                <div class="card">
                    <p class="card-header">U bent een vertrouwenspersoon!</p>
                    <a class="card-body" href="{{route('vertrouwenspersoon')}}">Klik hier om naar de vertrouwenspersoon pagina te gaan</a>
                </div>
            @endcan
        </div>
        <p>U kunt hier uw gegevens wijzigen</p>
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif

        @can('myProfile', $user)
            <div>
                <a href="{{$user->path('wijzig')}}"><button class="btn btn-primary">Wijzig gegevens</button></a>
            </div>
        @endcan
    </div>
@endsection
