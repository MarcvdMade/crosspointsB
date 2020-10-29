@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('info-show', $problem->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="problem">Probleem</label>
                <input name="problem" id="problem" type="text" value="{{$problem->name}}" required>
                @error('problem')
                <p>{{$errors->first('problem')}}</p>
                @enderror
            </div>
            <div>
                <label for="summary">Kleine beschrijving</label>
                <textarea name="summary" id="summary" type="text" required>{{$problem->summary}}</textarea>
                @error('summary')
                <p>{{$errors->first('summary')}}</p>
                @enderror
            </div>
            <div>
                <label for="description">Beschrijving</label>
                <textarea name="description" id="description" type="text" required>{{$problem->description}}</textarea>
                @error('description')
                    <p>{{$errors->first('description')}}</p>
                @enderror
            </div>
            <div>
                <label for="tips">Tips</label>
                <select name="tips[]" multiple id="tips">
                    @foreach($tips as $tip)
                        <option @if($problem->tips->contains($tip->id)) selected @endif value="{{$tip->id}}">{{$tip->tip}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="links">Links</label>
                <select name="links[]" multiple id="links">
                    @foreach($links as $link)
                        <option @if($problem->links->contains($link->id)) selected @endif value="{{$link->id}}">{{$link->label}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="Wijzig probleem">
            </div>
        </form>
        <div>
            <a href="{{route('info-show', $problem->id)}}">Annuleren</a>
        </div>
    </div>

@endsection
