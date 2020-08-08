<!doctype html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('argon') }}/img/favicon.png">

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

    <link rel="stylesheet" href="{{ asset('ezone') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/icofont.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/bundle.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('ezone') }}/css/responsive.css">
    <script src="{{ asset('ezone') }}/js/vendor/modernizr-2.8.3.min.js"></script>

    @stack('styles')
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
    
    @include('layouts.navbars.navbar')
    <div class="wrapper">
        @yield('content')
    </div>

    @include('layouts.footers.footer')


    <!--   Core JS Files   -->
    <script src="{{ asset('argon') }}/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('argon') }}/js/core/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('argon') }}/js/core/bootstrap.min.js" type="text/javascript"></script>

    <script src="{{ asset('ezone') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('ezone') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('ezone') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('ezone') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('ezone') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('ezone') }}/js/ajax-mail.js"></script>
    <script src="{{ asset('ezone') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('ezone') }}/js/plugins.js"></script>
    <script src="{{ asset('ezone') }}/js/main.js"></script>

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

    @stack('scripts')
</body>
</html>
