@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="d-flex justify-content-center login-header info-header">Vul Hier Uw Tip In</h3>
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
            <a href="{{route('problem')}}">Annuleren</a>
        </form>
    </div>
@endsection
