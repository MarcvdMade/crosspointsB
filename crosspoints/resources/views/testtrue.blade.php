@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Moet ik melden?</div>
                <div class="card-body">
                    <h2 class="text-center">Ja, wij raden u aan om te melden.</h2>
                    <form action="{{route('home')}}" method="POST">
                        @method('GET')
                        <button class="btn-primary" type="submit">Melden</button>
                    </form>
                    <form action="{{route('home')}}" method="POST">
                        @method('GET')
                        <button class="btn-primary" type="submit">Terug</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
