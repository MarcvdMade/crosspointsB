@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <h3 class="d-flex justify-content-center login-header info-header">Voeg Probleem Toe</h3>
            <div class="card-body login-body">
        <form action="{{route('information')}}" method="POST" >
            @csrf

            <div class="form-group row">

                <label for="problem" class="col-md-4 col-form-label text-md-right info-create-label" >Probleem</label>

                <div class="col-md-6">

                    <input type="text" name="summary" id="summary" type="text" class="info-problem-area" required>{{old('summary')}}
                    @error('summary')
                    <p>{{$errors->first('summary')}}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="summary" class="col-md-4 col-form-label text-md-right info-create-label">Kleine beschrijving</label>

                <div class="col-md-6">

                <textarea name="summary" id="summary" type="text" class="info-create-textarea" required>{{old('summary')}}</textarea>
                @error('summary')
                    <p>{{$errors->first('summary')}}</p>
                @enderror
                </div>
            </div>


            <div class="form-group row">

                <label for="description"  class="col-md-4 col-form-label text-md-right info-create-label" >Volledige beschrijving</label>

                <div class="col-md-6">

                <textarea name="description" id="description" type="text" class="info-create-textarea" required>{{old('description')}}</textarea>
                @error('description')
                <p>{{$errors->first('description')}}</p>
                @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tips" class="col-md-4 col-form-label text-md-right info-create-label">Tips</label>

                <div class="col-md-6 info-create-select">

                <select name="tips[]" multiple id="tips" class="">
                    @foreach($tips as $tip)
                        <option value="{{$tip->id}}">{{$tip->tip}}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="form-group row">

                <label for="links" class="col-md-4 col-form-label text-md-right info-create-label">Links</label>

                <div class="col-md-6">

                <select name="links[]" multiple id="links" class="info-create-select">
                    @foreach($links as $link)
                        <option value="{{$link->id}}">{{$link->label}}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Voeg toe" class="info-create-button">
            </div>
        </form>
        <div>
            <a href="{{route('information')}}">Annuleren</a>
        </div>
        </div>
        </div>
    </div>

@endsection
