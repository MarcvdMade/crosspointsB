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
                            <th scope="col">Naam</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Bedrijf</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach($user->companies as $company)
                                    {{ $company->name }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
