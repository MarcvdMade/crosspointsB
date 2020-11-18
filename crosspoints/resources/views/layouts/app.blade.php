<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Team Crosspoints B</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/layout.css")}}">
    <link rel="stylesheet" href="{{asset("css/login-style.css")}}">
    <link rel="stylesheet" href="{{asset("css/info.css")}}">
    <link rel="stylesheet" href="{{asset("css/melden.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="{{asset("css/app.css")}}">



</head>

<body>
    <header>
    <div id="">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm layout-navbar">
            <div class="container">
                <img src="{{asset('css/images/logo.png')}}" class="figure-img navbar-logo">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    Team Crosspoints B
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('profile', auth()->user())}}">Profiel</a>
                                    @can('is_admin')
                                        <a class="dropdown-item" href="{{route('admin')}}">Admin pagina</a>
                                    @endcan
                                    @can('is_counselor')
                                        <a class="dropdown-item" href="{{route('vertrouwenspersoon')}}">Vertrouwenspersoon pagina</a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Uitloggen') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
                    <div class="layout-sitenav d-flex justify-content-center">
                        <div class="layout-sitenav-block">
                            <a href="{{route('home')}}" class="layout-sitenav-links"><img src="{{asset('css/images/homelogo.png')}}" alt="Navigation logo representing the home page" class="layout-sitenav-pic">
                            Home</a>
                        </div>

                        <div class="layout-sitenav-block">
                            <a href="{{route('meldentest')}}" class="layout-sitenav-links"><img src="{{asset('css/images/reportlogo.png')}}" alt="Report logo representing the report page" class="layout-sitenav-pic">
                            Test</a>
                        </div>

                        <div class="layout-sitenav-block">
                            <a href="{{route('meld')}}" class="layout-sitenav-links"><img src="{{asset('css/images/megaphonelogo.png')}}" alt="Report logo representing the report page" class="layout-sitenav-pic">
                            Melden</a>
                        </div>

                        <div class="layout-sitenav-block">
                            <a href="{{route('information')}}" class="layout-sitenav-links"><img src="{{asset('css/images/booklogo.png')}}" alt="Book logo representing the about page" class="layout-sitenav-pic">
                            Info</a>
                        </div>

                        <div class="layout-sitenav-block">
                            <a href="#" class="layout-sitenav-links"><img src="{{asset('css/images/phonelogo.png')}}" alt="Phone logo representing the contact page" class="layout-sitenav-pic">
                            Contact</a></button>
                        </div>
            </div>
    </div>
    </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>
