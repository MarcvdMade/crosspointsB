@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="d-flex justify-content-center login-header info-header">Profiel van {{$user->name}}</h2>
        <div class="card-body login-body">
            @can('myProfile', $user)
                    <div class="row justify-content-center">
                        <div class="col-lg-5 py-4 text-center">
                            <h3>Name: <span style="font-size: 21px">{{$user->name}}</span></h3>
                        </div>
                        <div class="col-lg-5 py-4 text-center">
                            <h3>E-Mail: <span style="font-size: 21px">{{$user->email}}</span></h3>
                        </div>
                    </div>
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="{{$user->path('wijzig')}}"><button class="info-meerlezen-btn" style="margin: 30px 0">Wijzig gegevens</button></a>
                    </div>
                </div>
            @endcan
                @can('is_admin')
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-4 text-center">
                        <h4>Rechten die u heeft:</h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <img src="{{asset('css/images/adminlogo.png')}}" alt="Logo van een admin" class="show-admin-img">
                        <h5 class="show-admin">U bent een admin!</h5>
                        <button class="btn btn-dark admin-show-btn"><a class="text-decoration-none text-white" href="{{route('admin')}}">Admin Pagina</a></button>
                    </div>
                    @can('is_counselor')
                        <div class="col-5">
                            <img src="{{asset('css/images/lovelogo.png')}}" alt="Logo van een vertrouwenspersoon" class="show-admin-img">
                            <h5 class="show-admin">U bent een vertrouwenspersoon!</h5>
                            <button class="btn btn-dark admin-show-btn"><a class="text-decoration-none text-white" href="{{route('vertrouwenspersoon')}}">Vertrouwenspersoon Pagina</a></button>
                        </div>
                    @endcan
                </div>
            @endcan
            @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
            @endif
        </div>
    </div>
    <div class="container" style="margin-top: 70px">
        <h2 class="d-flex justify-content-center diary-header info-header">Dagboek van {{$user->name}}</h2>
        <div class="test">
            <br>
{{--            !!! Hier was je mee bezig !!!--}}
            <div class="limiter">
            @foreach($user->report as $report)

                <div id="{{$report->id}}" class="overlay">
                    <div id="text">
                        <p style="font-weight: bold;font-size: 20px;">Situatie</p>
                        <p class="overlay-head">{{$report->situation}}</p>

                        <p style="font-weight: bold;font-size: 20px;">Since</p>
                        <p class="overlay-text">{{$report->since}}</p>

                        <p style="font-weight: bold;font-size: 20px;">Ervaring</p>
                        <p class="overlay-text">{{$report->experience}}</p>

                        <p style="font-weight: bold;font-size: 20px;">Begeleider</p>
                        <p class="overlay-text">{{$report->counselor}}</p>

                        <p style="font-weight: bold;font-size: 20px;">Contact Methode</p>
                        <p class="overlay-text">{{$report->contact}}</p>
                        <button class="btn btn-dark"   id="{{$report->id}}" onclick="off({{$report->id}})">Klik hier om te sluiten </button>
                    </div>
                </div>
                <div class="diary-card" id="{{$report->id}}" onclick="on({{$report->id}})">
                    <div class="container">
                        <h4>{{$report->situation}}</h4>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

    <script>
        function on(id) {
            document.getElementById(id).style.visibility = "visible";
            console.log(id)
        }

        function off(id) {
            document.getElementById(id).style.visibility = "hidden";
            console.log("hidden")
        }
    </script>

@endsection
