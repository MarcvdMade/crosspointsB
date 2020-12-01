@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="d-flex justify-content-center login-header info-header">Profiel van {{$user->name}}</h2>
        <div class="card-body login-body">
            <h4>Rechten die u heeft:</h4>
            @can('is_admin')
                <div class="card-body login-body">
                    <img src="{{asset('css/images/adminlogo.png')}}" alt="Logo van een admin" class="show-admin-img">
                    <h5 class="show-admin">U bent een admin!</h5>
                    <button class="btn btn-dark admin-show-btn"><a class="text-decoration-none text-white" href="{{route('admin')}}">Admin Pagina</a></button>
                </div>
            @endcan

            @can('is_counselor')
                <div class="card-body login-body">
                    <img src="{{asset('css/images/lovelogo.png')}}" alt="Logo van een vertrouwenspersoon" class="show-admin-img">
                    <h5 class="show-admin">U bent een vertrouwenspersoon!</h5>
                    <button class="btn btn-dark admin-show-btn"><a class="text-decoration-none text-white" href="{{route('vertrouwenspersoon')}}">Vertrouwenspersoon Pagina</a></button>
                </div>
            @endcan
            <p>U kunt hier uw gegevens wijzigen</p>
            @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
            @endif
            @can('myProfile', $user)
            <div>
                <a href="{{$user->path('wijzig')}}"><button class="info-meerlezen-btn">Wijzig gegevens</button></a>
            </div>
            @endcan
        </div>
    </div>
@endsection
