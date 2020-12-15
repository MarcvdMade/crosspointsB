@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">Bedrijf toevoegen</h3>

                <div class="card-body login-body">
                    <form action={{route('createcompany')}} method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="h4">Bedrijfsnaam:</label>
                            <input type="text" class="form-control" name="name" placeholder="Vul de naam van het bedrijf in...">
                        </div>
                        <div class="form-group">
                            <label class="h4">KVK-nummer:</label>
                            <input type="text" class="form-control" name="kvk" placeholder="Vul het KVK-nummer in...">
                        </div>
                        <button type="submit" class="btn btn-primary ml-auto mr-auto">Voeg bedrijf toe</button>
                    </form>
                    <a href="{{route('admin')}}">Annuleren</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container mt-3">
        <div class="card-body d-flex justify-content-center login-body">
            <h2>Overzicht bedrijven</h2>
        </div>
        <div>
            <table class="table table-hover table-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bedrijf</th>
                    <th scope="col">KvK nummer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->kvk}}</td>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
