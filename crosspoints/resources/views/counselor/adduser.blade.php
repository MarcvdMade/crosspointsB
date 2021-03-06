@extends('layouts.app')

@section('content')
    <a href="{{route('vertrouwenspersoon')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header login-header">Voeg een gebruiker toe</div>

                    <div class="card-body login-body">
                        <p>Gebruik de werk email van de werknemer! Het wachtwoord wordt gezet naar welkommedewerker. Zorg dat de medewerker deze zelf aanpast!</p>
                        <form method="POST" action="{{ route('vertrouwenspersoon') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Naam') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <input type="hidden" name="password" value="welkommedewerker">
                            </div>



                            <div class="form-group row">
                                <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Bedrijf') }}</label>

                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <select id="company" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}">
                                            @foreach($companies as $company)
                                                <option value="{{$company->id }}">{{$company->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn submit-button">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="{{route('vertrouwenspersoon')}}">Annuleren</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
