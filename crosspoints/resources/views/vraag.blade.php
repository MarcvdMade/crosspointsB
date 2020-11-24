@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Vraag Toevoegen</h3>

                    <div class="card-body login-body">
                        <form method="POST" action="{{route('vraag.create')}}">
                            @csrf
                            <div class="form-group">
                                <label for="vraag">Vraag:</label>
                                <textarea name="vraag" class="form-control" rows="3" placeholder="Voeg een vraag toe"></textarea>
                                @error('vraag')
                                <p>{{$errors->first('vraag')}}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success" >Opslaan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
