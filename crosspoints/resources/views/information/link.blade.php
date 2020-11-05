@extends('layouts.app')

@section('content')
    <div class="container">

        <h3 class="d-flex justify-content-center login-header info-header">Vul Hier Uw Link In</h3>
        <div class="info-link-page">
        <form action="{{route('link-save')}}" method="POST">
            @csrf

            <label for="link"  class="d-flex justify-content-center info-link-label">Link</label>
            <div class="d-flex justify-content-center">
                <input name="link" id="link" type="url" value="{{old('link')}}" required>
                @error('link')
                    <p>{{$errors->first('link')}}</p>
                @enderror
            </div>

            <label for="label"  class="d-flex justify-content-center info-link-label">Naam voor link</label>
            <div class="d-flex justify-content-center">
                <input name="label" id="label" type="text" value="{{old('label')}}" required>
                @error('label')
                <p>{{$errors->first('label')}}</p>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" name="submit" id="submit" value="Voeg link toe" class="info-create-button">
            </div>
        </form>
        </div>
    </div>
@endsection
