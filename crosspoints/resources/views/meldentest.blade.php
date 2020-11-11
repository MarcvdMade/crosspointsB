@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">"Moet ik me melden?" Test</h3>

                <div class="card-body login-body">
                    <h2 class="text-center">Vraag 0</h2>

                            <form action="{{route('checkscore')}}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class=""><button value="1" name="button" class="melden-yesno-button">ja</button></div>

                                        <div class=""><button value="2" name="button" class="melden-yesno-button">nee</button></div>
                                    </div>
                            </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
