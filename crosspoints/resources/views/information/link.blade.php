@extends('layouts.app')

@section('content')
    <a href="{{route('problem')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Link Maken</h3>
                    <div class="login-body">
                    <form action="{{route('link-save')}}" method="POST">
                        @csrf

                        <div class="form-group">
                        <label for="link"  class="d-flex justify-content-center info-link-label">Link</label>
                        <div class="d-flex justify-content-center">
                            <input name="link" class="form-control-md" id="link" type="url" value="{{old('link')}}" required>
                            @error('link')
                                <p>{{$errors->first('link')}}</p>
                            @enderror
                        </div>

                        <label for="label"  class="d-flex justify-content-center info-link-label">Naam voor link</label>
                        <div class="d-flex justify-content-center">
                            <input name="label" class="form-control-md" id="label" type="text" value="{{old('label')}}" required>
                            @error('label')
                            <p>{{$errors->first('label')}}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" name="submit" id="submit" value="Voeg link toe" class="info-create-button">
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
