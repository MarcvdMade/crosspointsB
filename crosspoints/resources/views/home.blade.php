@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header login-header">{{ __('Dashboard') }}</div>

                <div class="card-body login-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <p>Vragen aanpassen/verwijderen/invoeren
                    <a href="{{route('vragenlijst')}}"><button class="info-meerlezen-btn">Vragenlijst</button></a></p>
            </div>
            <div class="links"></div>
        </div>
    </div>
</div>
@endsection
