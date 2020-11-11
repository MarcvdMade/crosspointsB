@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="d-flex justify-content-center login-header info-header">Wijzig gegevens</h2>
        <div class="card-body login-body">
            <form method="POST" action="{{$user->path()}}">
                @csrf
                @method('PATCH')

                <div>
                    <label for="name" class="d-flex justify-content-center info-link-label">Volledige naam</label>

                    <div class="d-flex justify-content-center">
                        <input type="text" name="name" id="name"   value="{{$user->name}}">
                        @error('name')
                        <p>{{$errors->first('name')}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email"  class="d-flex justify-content-center info-link-label">Email</label>

                    <div  class="d-flex justify-content-center">
                        <input type="email" name="email" id="email"  class="info-problem-area" value="{{$user->email}}" required>
                        @error('email')
                        <p>{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="d-flex justify-content-center info-link-label">Wachtwoord</label>

                    <div  class="d-flex justify-content-center">
                        <input type="password" name="password"  id="password" value="" required>
                        @error('password')
                        <p>{{$errors->first('password')}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="d-flex justify-content-center info-link-label">Herhaal wachtwoord</label>

                    <div  class="d-flex justify-content-center">
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>

                    @error('password_confirmation')
                    <p>{{$errors->first('password_confirmation')}}</p>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" name="submit" id="submit"  class="info-create-button" value="Wijzig gegevens">
                </div>
            </form>
            <a href="{{route('profile', auth()->user())}}"><button class="btn btn-success">Cancel</button></a>
        </div>
    </div>
@endsection
