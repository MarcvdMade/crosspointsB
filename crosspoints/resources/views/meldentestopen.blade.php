@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="d-flex justify-content-center login-header info-header">Informatie voor de test</h3>

                <div class="card-body login-body">
                    <h2 class="text-center">Welke vormen van ongewenst gedrag zijn aanwezig geweest?</h2>
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
                    <h2 class="text-center">Uw dagboek</h2>
                        <input class="w-100">
                </div>
                <div class="card-body login-body">
                    <a href="{{route('meldentest')}}"><button class="btn btn-primary">Start de meldentest</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
