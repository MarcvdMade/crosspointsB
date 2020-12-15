@extends('layouts.app')

@section('content')
    <a href="{{route('vertrouwenspersoon')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Meldingen</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Werknemer</th>
                            <th scope="col">Situatie</th>
                            <th scope="col">Sinds</th>
                            <th scope="col">Ervaring</th>
                            <th scope="col">Vertrouwenspersoon</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Datum ingediend</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($melds as $meld)
                            @if($meld->hidden_vp == 1)
                            <tr>
                                <th scope="row">{{ $meld->id }}</th>
                                <td>{{$meld->user->name}}</td>
                                <td>{{ $meld->situation }}</td>
                                <td>{{ $meld->since }}</td>
                                <td>{{ $meld->experience }}</td>
                                <td>{{ $meld->counselor }}</td>
                                <td>{{ $meld->contact }}</td>
                                <td>{{ $meld->phone }}</td>
                                <td>{{ $meld->created_at }}</td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
