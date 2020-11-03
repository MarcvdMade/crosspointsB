@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('link-save')}}" method="POST">
            @csrf

            <div>
                <label for="link">Link</label>
                <input name="link" id="link" type="url" value="{{old('link')}}" required>
                @error('link')
                    <p>{{$errors->first('link')}}</p>
                @enderror
            </div>
            <div>
                <label for="label">Naam voor link</label>
                <input name="label" id="label" type="text" value="{{old('label')}}" required>
                @error('label')
                <p>{{$errors->first('label')}}</p>
                @enderror
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="Voeg link toe">
            </div>
        </form>
    </div>
@endsection
