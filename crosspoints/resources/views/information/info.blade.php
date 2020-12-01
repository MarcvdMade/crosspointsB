@extends('layouts.app')

@section('content')
    <div class="container info-main-container">

        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif

        <div class="d-flex justify-content-center login-header info-header">
            <h1>Soorten ongewenst gedrag</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                @foreach($problems as $problem)
                    <div class="card m-3">
                        <div class="card-header login-header">
                            <h3>{{$problem->name}}</h3>
                        </div>
                        <div class="card-body login-body">
                            <p>{{$problem->summary}}</p>
                            <ul>
                                @foreach($problem->tips as $tip)
                                    <li>{{$tip->tip}}</li>
                                @endforeach
                            </ul>
                            <div>
                                <h5>Artikelen over het onderwerp:</h5>
                                <ol>
                                @foreach($problem->links as $link)
                                    <li>
                                    <a href="{{$link->link}}" class="problem_links">{{$link->label}}</a>
                                    </li>
                                @endforeach
                                </ol>
                            </div>
                            <div>
                                <a href="{{route('info-show', $problem['id'])}}"><button class="info-meerlezen-btn">Meer lezen</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
