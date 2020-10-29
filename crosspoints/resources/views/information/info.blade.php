@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="">
            <h2>Informatie</h2>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div>
            <a href="{{route('info-create')}}"><button class="btn btn-primary">Voeg een probleem toe.</button></a>
            <a href="{{route('tip-create')}}"><button class="btn btn-primary">Voeg een tip toe.</button></a>
            <a href="{{route('link-create')}}"><button class="btn btn-primary">Voeg een link toe.</button></a>
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
