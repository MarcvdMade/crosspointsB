@extends('layouts.app')

@section('content')
<style>
    p {
        color: #0D7377;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">Uit uw test raden wij aan</h3>

                <div class="card-body login-body">
                    @if($answer == 'meld')
                    <h2 class="text-center">Om te melden</h2>
                    @else
                    <h2 class="text-center">Om niet te melden</h2>
                    @endif
                    <p class="text-muted text-center"><br><br>Dit is maar een aanrading doe wat u zelf het beste lijkt.<br><br></p>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('home')}}"><button class="btn btn-primary mr-5">Terug</button></a>
                        <a href="{{route('meld')}}"><button class="btn btn-primary ml-5">Melden</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
