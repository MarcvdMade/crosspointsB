@extends('layouts.app')
<script>
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });
</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">"Moet ik me melden?" Test</h3>

                <div class="card-body login-body">
                    <h2 class="text-center">Welke vormen van ongewenst gedrag zijn er voorgekomen?</h2>
                    <p class="text-center text-muted">Zo nodig kunt u meerdere antwoorden selecteren.</p>
                    <h2 class="text-center">Score {{$test}}</h2>

                            <form action="{{route('vragenlijst')}}" method="POST">
                                @csrf
                                    <script>
                                        window.onmousedown = function (e) {
                                            var el = e.target;
                                            if (el.tagName.toLowerCase() == 'option' && el.parentNode.hasAttribute('multiple')) {
                                                e.preventDefault();

                                                if (el.hasAttribute('selected')) el.removeAttribute('selected');
                                                else el.setAttribute('selected', '');

                                                var select = el.parentNode.cloneNode(true);
                                                el.parentNode.parentNode.replaceChild(select, el.parentNode);
                                            }
                                        }
                                    </script>
                                    <div class="form-group full-height">
                                        <select multiple class="form-control" id="tips">
                                            @foreach($ongewenstgedrag as $item)
                                                <option value="{{$item}}">{{$item}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                            </form>
                    <form action="{{route('goback')}}" method="POST">
                        @csrf
                        <button class='btn-primary' type="submit">Go back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
