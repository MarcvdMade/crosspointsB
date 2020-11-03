@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('tip-save')}}" method="POST">
            @csrf

            <div>
                <label for="tip">Tip</label>
                <input name="tip" id="tip" type="text" value="{{old('tip')}}" required>
                @error('tip')
                    <p>{{$errors->first('tip')}}</p>
                @enderror
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="Voeg tip toe">
            </div>
        </form>
    </div>
@endsection
