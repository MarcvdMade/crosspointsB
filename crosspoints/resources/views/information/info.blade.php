@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div>
            <h2>Informatie</h2>
        </div>
        <div>
            <a href="{{route('info-create')}}">Voeg een probleem toe.</a>
        </div>
        <div>
            <div>
                @foreach($problems as $problem)
                    <div>
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
                            <a href="{{route('info-show', $problem['id'])}}">Meer lezen</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
