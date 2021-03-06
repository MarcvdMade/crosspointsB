@extends('layouts.app')

@section('content')
    <a href="{{route('problem')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Tip Maken</h3>
                    <div class="login-body">
                    <form action="{{route('tip-save')}}" method="POST" class="info-tip-form">
                        @csrf


                        <div  class="d-flex justify-content-center">
                            <textarea name="tip" id="tip" class="info-text-area" required></textarea>
                            @error('tip')
                                <p>{{$errors->first('tip')}}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" name="submit" id="submit" value="Voeg tip toe" class="info-main-button">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
@endsection
