@extends('layouts.app')

@section('content')
    <a href="{{route('home')}}"><img src="{{asset('css/images/backicon.png')}}" class="back_icon"></a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Melding maken</h3>
                    <div class="login-body">
                     <form method="POST" action="{{route('meld.create')}}">
                            @csrf
                            <div class="form-group">
                                <label for="situation" class="d-flex justify-content-center info-link-label">Situatie:</label>
                                <div class="col-12 d-flex justify-content-center info-link-label">
                                    <textarea name="situation" class="form-control" rows="3" placeholder="Omschrijf de situatie zo duidelijk mogelijk"></textarea>
                                </div>
                                @error('situation')
                                <p>{{$errors->first('situation')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="since" class="d-flex justify-content-center info-link-label">Sinds wanneer is deze situatie aan de gang?</label>
                                <div class="col-12 d-flex justify-content-center info-link-label">
                                <input type="text" name="since" class="form-control" />
                                @error('since')
                                <p>{{$errors->first('since')}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="experience" class="d-flex justify-content-center info-link-label">Hoe heeft u deze situatie ervaren?</label>
                                <p class="d-flex justify-content-center">0 = niet erg / 10 = zeer heftig</p>
                                <div class="col-12 d-flex justify-content-center">
                                <input type="range" class="form-control-range" id="myRange" min="0" max="10" value="5">
                                @error('experience')
                                    <p>{{$errors->first('experience')}}</p>
                                    @enderror
                                </div>
                                <p class="d-flex justify-content-center info-link-label" style="font-size: 32px"><span id="demo"></span></p>
                            </div>

                            <div class="form-group">
                                <label for="counselor" class="d-flex justify-content-center info-link-label">Kies een vertrouwenspersoon:</label>
                                <div class="col-12 d-flex justify-content-center info-link-label">
                                    <select class="form-control" id="counselor" name="counselor">
                                        <option value="Geen voorkeur">Geen voorkeur</option>
                                        <option value="Man">Man</option>
                                        <option value="Vrouw">Vrouw</option>
                                    </select>
                                @error('counselor')
                                <p>{{$errors->first('counselor')}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact" class="d-flex justify-content-center info-link-label">Hoe wilt u dat er contact met u opgenomen wordt?</label>
                                <div class="col-12 d-flex justify-content-center info-link-label">
                                    <select class="form-control" id="contact" name="contact">
                                        <option value="E-mail">E-mail</option>
                                        <option value="Telefoon">Telefoon</option>
                                    </select>
                                @error('contact')
                                <p>{{$errors->first('contact')}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="d-flex justify-content-center info-link-label">Telefoon nummer:</label>
                                <div class="col-12 d-flex justify-content-center info-link-label">
                                <input type="text" name="phone" class="form-control" />
                                @error('phone')
                                <p>{{$errors->first('phone')}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="conditions" class="d-flex justify-content-center info-link-label">Ik ga akkoord met de algemene voorwaarden</label>
                                <div class="col-12 d-flex justify-content-center info-link-label">
                                <input type="checkbox" name="conditions" style="width: 30px;height: 30px;" required>
                                @error('conditions')
                                <p>{{$errors->first('conditions')}}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="submit" class="info-create-button">Verzend</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    </script>

@endsection
