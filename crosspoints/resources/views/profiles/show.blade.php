@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="d-flex justify-content-center login-header info-header">Profiel van {{$user->name}}</h2>
        <div class="card-body login-body">
        <p class="d-flex justify-content-center info-link-label ">U kunt hier uw gegevens wijzigen</p>
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        @can('isUserProfile', $user)
            <div class="d-flex justify-content-center">
            <a href="{{$user->path('edit')}}"><button class="info-main-button">Wijzig gegevens</button></a>
            </div>
        @endcan
        </div>
    </div>
@endsection
