@extends('layouts.app')

@section('content')
    <div class="container info-main-container">

        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif

        <div class="d-flex justify-content-center login-header info-header">
            <h1>Informatie</h1>
        </div>
        <div class="card-body d-flex justify-content-center login-body">
            <button class="info-main-button"><a href="{{route('tip-create')}}" class="info-main-button-link">Voeg een tip toe.</a></button>
            <button class="info-main-button"><a href="{{route('info-create')}}" class="info-main-button-link">Voeg een probleem toe.</a></button>
            <button class="info-main-button"><a href="{{route('link-create')}}" class="info-main-button-link">Voeg een link toe.</a></button>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($problems as $problem)
                    <div class="card m-3">
                        <div class="card-header">
                            <h3>{{$problem->name}}</h3>
                        </div>
                        <div class="card-body">
                            <p>{{$problem->summary}}</p>
                            <ul>
                                @foreach($problem->tips as $tip)
                                    <li>{{$tip->tip}}</li>
                                @endforeach
                            </ul>
                            <div>
                                @foreach($problem->links as $link)
                                    <a href="{{$link->link}}">{{$link->label}}</a>
                                @endforeach
                            </div>
                            <div>
                                <a href="{{route('info-show', $problem['id'])}}">Meer lezen</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
