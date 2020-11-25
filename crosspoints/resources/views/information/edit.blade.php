@extends('layouts.app')

@section('content')
    <a href="{{route('problem')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Wijzig Informatie</h3>

                    <div class="card-body login-body">
                    <form action="{{route('info-show', $problem->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="problem">Probleem</label>
                        <input name="problem" class="form-control" id="problem" type="text" value="{{$problem->name}}" required>
                        @error('problem')
                        <p>{{$errors->first('problem')}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="summary">Kleine beschrijving</label>
                        <textarea name="summary"  class="form-control"  id="summary" type="text" required>{{$problem->summary}}</textarea>
                        @error('summary')
                        <p>{{$errors->first('summary')}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Beschrijving</label>
                        <textarea name="description"  class="form-control" id="description" type="text" required>{{$problem->description}}</textarea>
                        @error('description')
                            <p>{{$errors->first('description')}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tips">Tips</label>
                        <select name="tips[]" class="form-control" multiple id="tips">
                            @foreach($tips as $tip)
                                <option @if($problem->tips->contains($tip->id)) selected @endif value="{{$tip->id}}">{{$tip->tip}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="links">Links</label>
                        <select name="links[]" class="form-control" multiple id="links">
                            @foreach($links as $link)
                                <option @if($problem->links->contains($link->id)) selected @endif value="{{$link->id}}">{{$link->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn info-meerlezen-btn" value="Wijzig probleem">
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
