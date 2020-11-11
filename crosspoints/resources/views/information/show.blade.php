@extends('layouts.app')

@section('content')
    <div>
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <h2>{{$problem->name}}</h2>
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
@endsection
