@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Moet ik melden?</div>

                <div class="card-body">
                    <h2 class="text-center">Vraag</h2>

                            <form action="{{route('checkscore')}}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm"><button value="1" name="button">ja</button></div>
                                        <div class="col-sm"></div>
                                        <div class="col-sm"><button value="2" name="button">nee</button></div>
                                    </div>
                            </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
