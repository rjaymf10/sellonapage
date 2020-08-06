<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('argon') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('argon') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('argon') }}/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('argon') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('argon') }}/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
</head>
<body class="{{ $class ?? '' }}">
    @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        {{-- @if (auth()->user()->email_verified_at != null)
            @include('layouts.navbars.sidebar')
        @endif --}}
    @endauth
    
    <div class="main-content">
        @include('layouts.navbars.navbar')
        <div class="wrapper">
            @yield('content')
        </div>
    </div>

    @include('layouts.footers.footer')

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shops.create') }}" class="card-link">
                                {{ __('Open your shop') }}
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link pt-0" href="{{ route('carts.index') }}" class="card-link">
                                <i class="fa fa-cart-arrow-down text-primary fa-2x"></i>
                                <span class="badge badge-pill badge-danger">
                                    @auth
                                        {{ \Cart::session(auth()->id())->getContent()->count() }}
                                    @else
                                        0
                                    @endauth
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            Display Success Message
            @if (session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session('status') }}</strong> 
                </div>
            @endif

            Display Error Message
            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session('error') }}</strong> 
                </div>
            @endif

            @yield('content')
        </main>
    </div> --}}

    <!--   Core JS Files   -->
    <script src="{{ asset('argon') }}/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('argon') }}/js/core/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('argon') }}/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('argon') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('argon') }}/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('argon') }}/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="{{ asset('argon') }}/js/plugins/moment.min.js"></script>
    <script src="{{ asset('argon') }}/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <script src="{{ asset('argon') }}/js/plugins/bootstrap-datepicker.min.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="{{ asset('argon') }}/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-design-system-pro"
        });
    </script>
</body>
</html>
