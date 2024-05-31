<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('assets/back/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/back/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/back/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/back/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/back/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<!-- loader-->
    <link href="{{ asset('assets/back/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{ asset('assets/back/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
    <link href="{{ asset('assets/back/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/back/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/back/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/back/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/dark-theme.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/back/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/back/css/header-colors.css')}}"/>

    <!-- Scripts -->
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
            <!--wrapper-->
            <div class="wrapper">
                <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('assets/back/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
    <script src="{{ asset('assets/back/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/back/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('assets/back/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('assets/back/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets/back/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/back/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/back/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

    <script src="{{ asset('assets/back/js/index.js')}}"></script>
	<!--app JS-->
    <script src="{{ asset('assets/back/js/app.js')}}"></script>
</body>
</html>
