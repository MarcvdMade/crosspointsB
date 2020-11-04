@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Profiel van {{$user->name}}</h2>
        <p>U kunt hier uw gegevens wijzigen</p>
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        @can('isUserProfile', $user)
            <a href="{{$user->path('wijzig')}}"><button class="btn btn-primary">Wijzig gegevens</button></a>
        @endcan
    </div>
@endsection
