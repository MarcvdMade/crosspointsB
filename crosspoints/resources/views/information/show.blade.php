@extends('layouts.app')

@section('content')
    <a href="{{route('information')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
    <div class="info-main-container container">
    @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div class="d-flex justify-content-center login-header info-header">
            <h2>{{$problem->name}}</h2>
        </div>
            <div class="card-body login-body">
        <p>{{$problem->description}}</p>
        <ul>
            @foreach($problem->tips as $tip)
                <li>{{$tip->tip}}</li>
            @endforeach
        </ul>
        <div>
            <h4>Meer over dit onderwerp? Bekijk de onderstaande links:</h4>
            <ol>
            @foreach($problem->links as $link)
                <li><a href="{{$link->link}}" class="links problem_links">{{$link->label}}</a></li>
            @endforeach
            </ol>
        </div>
            </div>
    </div>
@endsection
