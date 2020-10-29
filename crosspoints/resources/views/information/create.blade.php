@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('information')}}" method="POST">
            @csrf

            <div>
                <label for="problem">Probleem</label>
                <input name="problem" id="problem" type="text" value="{{old('problem')}}" required>
                @error('problem')
                <p>{{$errors->first('problem')}}</p>
                @enderror
            </div>
            <div>
                <label for="summary">Kleine beschrijving</label>
                <textarea name="summary" id="summary" type="text" required>{{old('summary')}}</textarea>
                @error('summary')
                    <p>{{$errors->first('summary')}}</p>
                @enderror
            </div>
            <div>
                <label for="description">Volledige beschrijving</label>
                <textarea name="description" id="description" type="text" required>{{old('description')}}</textarea>
                @error('description')
                <p>{{$errors->first('description')}}</p>
                @enderror
            </div>
            <div>
                <label for="tips">Tips</label>
                <select name="tips[]" multiple id="tips">
                    @foreach($tips as $tip)
                        <option value="{{$tip->id}}">{{$tip->tip}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="links">Links</label>
                <select name="links[]" multiple id="links">
                    @foreach($links as $link)
                        <option value="{{$link->id}}">{{$link->label}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="Voeg toe">
            </div>
        </form>
        <div>
            <a href="{{route('information')}}">Annuleren</a>
        </div>
    </div>

@endsection
