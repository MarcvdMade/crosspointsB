@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Moet ik melden?</div>

                <div class="card-body">
                    <h2 class="text-center">Voelde u zich onveilig?</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm"><button>yes</button></div>
                            <div class="col-sm"></div>
                            <div class="col-sm-4.4"><button>no</button></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm"></div>
                            <div class="col-sm"></div>
                            <div class="col-sm-4.4 text-muted"><a><ins>cancel</ins></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
