@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">Vertrouwenspersoon toevoegen</h3>

                <div class="card-body login-body">
                    <form action={{route('createvp')}} method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="h4">Voornaam:</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Vul de voornaam van het vertrouwenspersoon in...">
                        </div>
                        <div class="form-group">
                            <label class="h4">Achternaam:</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Vul de achternaam van het vertrouwenspersoon in...">
                        </div>
                        <button type="submit" class="btn btn-primary ml-auto mr-auto">Voeg vertrouwenspersoon toe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
