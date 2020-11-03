@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Wijzig gegevens</h2>
        <div>
            <form method="POST" action="{{$user->path()}}">
                @csrf
                @method('PATCH')

                <div>
                    <label for="name">Volledige naam</label>

                    <div>
                        <input type="text" name="name" id="name" value="{{$user->name}}">
                        @error('name')
                        <p>{{$errors->first('name')}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email">Email</label>

                    <div>
                        <input type="email" name="email" id="email" value="{{$user->email}}" required>
                        @error('email')
                        <p>{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password">Wachtwoord</label>

                    <div>
                        <input type="password" name="password" id="password" value="" required>
                        @error('password')
                        <p>{{$errors->first('password')}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password_confirmation">Herhaal wachtwoord</label>

                    <div>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>

                    @error('password_confirmation')
                    <p>{{$errors->first('password_confirmation')}}</p>
                    @enderror
                </div>
                <div class="pt-3">
                    <div>
                        <input type="submit" name="submit" id="submit" value="Wijzig gegevens">
                    </div>
                </div>
            </form>
            <a href="{{route('profile', auth()->user())}}"><button class="btn btn-primary mt-4">Cancel</button></a>
        </div>
    </div>
@endsection
