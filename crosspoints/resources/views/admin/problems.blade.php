@extends("layouts.app")

@section('content')
    <div class="container-fluid">
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div class="d-flex justify-content-center login-header info-header">
            <h1>Soorten ongewenst gedrag</h1>
        </div>
        <div class="card-body d-flex justify-content-center login-body">
            <button class="info-main-button"><a href="{{route('tip-create')}}" class="info-main-button-link">Voeg een tip toe.</a></button>
            <button class="info-main-button"><a href="{{route('info-create')}}" class="info-main-button-link">Voeg een probleem toe.</a></button>
            <button class="info-main-button"><a href="{{route('link-create')}}" class="info-main-button-link">Voeg een link toe.</a></button>
        </div>
        <div>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Soort ongewenst gedrag</th>
                    <th scope="col">Samenvatting</th>
                    <th scope="col">Beschrijving</th>
                    <th scope="col">Wijzig</th>
                    <th scope="col">Verwijder</th>
                </tr>
                </thead>
                <tbody class="bg-light">
                @foreach($problems as $problem)
                    <tr>
                        <th scope="row">{{$problem->name}}</th>
                        <td>{{$problem->summary}}</td>
                        <td>{{$problem->description}}</td>
                        <td>
                            <a href="{{route('info-edit', $problem['id'])}}">Wijzig</a>
                        </td>
                        <td>
                            <form method="POST" action="{{route('info-show', $problem['id'])}}">
                                @csrf
                                @method('DELETE')

                                <button type="submit">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
