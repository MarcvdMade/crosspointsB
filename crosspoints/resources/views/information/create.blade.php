@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <h3 class="d-flex justify-content-center login-header info-header">Voeg Een Probleem Toe</h3>
            <div class="card-body login-body">
        <form action="{{route('information')}}" method="POST" >
            @csrf

                <label for="problem" class="d-flex justify-content-center info-link-label" >Probleem</label>

                <div class="d-flex justify-content-center">

                    <input type="text" name="summary" id="summary"  class="info-problem-area" required>{{old('summary')}}
                    @error('summary')
                    <p>{{$errors->first('summary')}}</p>
                    @enderror
                </div>


                <label for="summary" class="d-flex justify-content-center info-link-label" >Kleine beschrijving</label>

                <div class="d-flex justify-content-center">

                <textarea name="summary" id="summary" type="text" class="info-create-textarea" required>{{old('summary')}}</textarea>
                @error('summary')
                    <p>{{$errors->first('summary')}}</p>
                @enderror
                </div>


                <label for="description"  class="d-flex justify-content-center info-link-label" >Volledige beschrijving</label>

                <div class="d-flex justify-content-center">

                <textarea name="description" id="description" type="text" class="info-create-textarea" required>{{old('description')}}</textarea>
                @error('description')
                <p>{{$errors->first('description')}}</p>
                @enderror
                </div>



                <label for="tips" class="d-flex justify-content-center info-link-label">Tips</label>

                <div class="d-flex justify-content-center">

                <select name="tips[]" multiple id="tips" class="">
                    @foreach($tips as $tip)
                        <option value="{{$tip->id}}">{{$tip->tip}}</option>
                    @endforeach
                </select>
                </div>

                <label for="links" class="d-flex justify-content-center info-link-label">Links</label>

            <div class="d-flex justify-content-center">

                <select name="links[]" multiple id="links" class="info-create-select">
                    @foreach($links as $link)
                        <option value="{{$link->id}}">{{$link->label}}</option>
                    @endforeach
                </select>
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
