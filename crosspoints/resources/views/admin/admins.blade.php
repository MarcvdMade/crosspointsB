@extends('layouts.app')

@section('content')
    <a href="{{route('admin')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
<div class="container">
    <div class="card">
        <div class="card-header login-header">
            <h2 class="text-center">Overzicht Administrators</h2>
        </div>
        <div class="card-body d-flex justify-content-center login-body">
            <button class="info-main-button"><a href="{{route('registerAdmin')}}" class="info-main-button-link">Registreer administrator.</a></button>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
    </div>
    <div>
        <table class="table table-hover table-dark">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Naam</th>
                <th scope="col">Email</th>
                <th scope="col">Verwijder</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $admin)
                @if($admin->hasRole('admin'))
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>
                        <form method="POST" action="{{route('delete-admin', $admin['id'])}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Verwijder</button>
                        </form>
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
    @endsection
