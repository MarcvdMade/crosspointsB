@extends('layouts.app')

@section('content')
    <img src="{{asset('css/images/backicon.png')}}" class="back_icon">
    <div class="info-main-container container">
    @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div class="d-flex justify-content-center login-header info-header">
            <h2>{{$problem->name}}</h2>
            <img src="{{asset('css/images/questionicon.png')}}" class="question_icon">
        </div>
            <div class="card-body login-body">
        <p>{{$problem->description}}</p>
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
            <a href="{{route('information')}}">Terug</a>
        </div>
            </div>
    </div>
@endsection
