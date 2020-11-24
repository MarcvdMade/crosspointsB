@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Vragenlijst</h3>
                    <a href="{{route('vraag')}}"><button class="info-meerlezen-btn">Vraag Toevoegen</button></a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Vraag</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vraags as $vraag)
                            <tr>
                                <th scope="row">{{ $vraag->id }}</th>
                                <td>{{ $vraag->vraag }}</td>
                                <td>
                                    <a href="{{route('edit-vraag', $vraag->id)}}" class="btn btn-secondary">Edit</a>
                                    <a href="/delete-vraag/{{$vraag->id}}" class="btn btn-danger">Delete</a>
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
