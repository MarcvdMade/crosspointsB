@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="d-flex justify-content-center login-header info-header">Melding maken</h3>

                    <div class="card-body login-body">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="situation">Situatie:</label>
                                <textarea name="situation" class="form-control" rows="3" placeholder="Omschrijf de situatie zo duidelijk mogelijk"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="since">Sinds wanneer is deze situatie aan de gang?</label>
                                <input type="text" name="since" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="experience">Hoe heeft u deze situatie ervaart? 0 is het doet me niks 10 is het meest heftige voor u</label>
                                <textarea name="experience" class="form-control" rows="3" placeholder="s"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="counselor">Kies een vertrouwenspersoon:</label>
                                    <select class="form-control" id="counselor" name="counselor">
                                        <option value="Geen voorkeur">Geen voorkeur</option>
                                        <option value="Man">Man</option>
                                        <option value="Vrouw">Vrouw</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="contact">Hoe wilt u dat er contact met u opgenomen wordt?</label>
                                    <select class="form-control" id="contact" name="contact">
                                        <option value="E-mail">E-mail</option>
                                        <option value="Telefoon">Telefoon</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefoon nummer:</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="conditions">U dient akkoord te gaan met de algemene voorwaarden als u het formulier wilt opsturen <input type="checkbox" name="conditions"></label>
                            </div>

                            <button type="submit" class="btn btn-success" >Verzend</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
