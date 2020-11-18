@extends("layouts.app")

@section('content')
    <div class="container">
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
            <table class="table table-hover table-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Soort</th>
                    <th scope="col">Samenvatting</th>
                    <th scope="col">Beschrijving</th>
                    <th scope="col">Wijzig</th>
                    <th scope="col">Verwijder</th>
                </tr>
                </thead>
                <tbody>
                @foreach($problems as $problem)
                    <tr>
                        <td>{{$problem->id}}</td>
                        <td>{{$problem->name}}</td>
                        <td>{{$problem->summary}}</td>
                        <td>{{$problem->description}}</td>
                        <td>
                            <a href="{{route('info-edit', $problem['id'])}}" class="btn btn-primary">Wijzig</a>
                        </td>
                        <td>
                            <form method="POST" action="{{route('info-show', $problem['id'])}}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-success">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
@endsection
