<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('assets/back/images/favicon-32x32.png') }}" type="image/png" />
	<link href="{{ asset('assets/back/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/back/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/back/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/back/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/back/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/back/css/pace.min.css') }}') }}" rel="stylesheet"/>
	<script src="{{ asset('assets/back/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/back/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/back/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets/back/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/back/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/back/css/dark-theme.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/back/css/semi-dark.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/back/css/header-colors.css') }}"/>
<body>
    <div id="app">
        <main class="py-4">
            <div class="wrapper">
				@include('layouts.include.sidebar')
				@include('layouts.include.header')
                <div>
                    @yield('content')
                </div>
				@include('layouts.include.footer')
            </div>
        </main>
    </div>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/back/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/back/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/back/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/back/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/back/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('assets/back/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/back/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/back/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

	<script src="{{ asset('assets/back/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets/back/js/app.js') }}"></script>
	<script>
		const BASE_URL = 'http://localhost:8000/'
		const submitBtn = document.querySelector("#submitBtn");
		submitBtn.addEventListener('click', function(e){
			const title = document.querySelector("input[name='title']").value;
			const slug = document.querySelector("input[name='slug']").value;
			// console.log(e);
			ajaxRequest(BASE_URL+'admin/ajax', 'post', {title, slug})
			.then(response => {
				return response.json();
			})
			.then(data => {
				console.log(data);
			})
			.catch(error => {
				console.log(error);
			})
		})

		function ajaxRequest(url, method="post", data={}){
			return fetch(url, {
				method:method,
				headers:{
					'Content-Type':"application/json",
					'X-CSRF-TOKEN':document.querySelector("meta[name='csrf-token']").getAttribute("content")
				},
				body: JSON.stringify(data)
			});
		}
	</script>
</body>
</html>
