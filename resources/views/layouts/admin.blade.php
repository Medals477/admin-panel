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
<<<<<<< HEAD
=======
	@section('css')
		
	@show
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
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
<<<<<<< HEAD
=======
	<script>
<<<<<<< HEAD
		const BASE_URL = 'http://localhost:8000/'
		const submitBtn = document.querySelector("#submitBtn");
		submitBtn.addEventListener('click', function(e){
			const title = document.querySelector("input[name='title']").value;
			const slug = document.querySelector("input[name='slug']").value;
			const status = document.querySelector("input[name='status']:checked").value;
			const categoryid = document.querySelector("#category_id").value;
			const data = {
				title,
				slug,
				status,
				categoryid,
			}
			ajaxRequest(BASE_URL+'admin/ajax', 'post', data)
			.then(response => {
				return response.json();
			})
			.then(data => {
				console.log(data);
			})
			.catch(error => {
				console.log(error);
			})
		});

		function deleteBlog(e){
			ajaxRequest(BASE_URL+'admin/ajax/delete', 'delete', {id:e})
			.then(response => {
				return response.json();
			})
			.then(success => {
				console.log(success);
				window.location.reload();
			})
			.catch((error) => {
				console.log(error);
			})
		}

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
	@section('js')
		
	@show
=======
        const BASE_URL = 'http://localhost:8000/';
        const submitBtn = document.querySelector("#submitBtn");
        submitBtn.addEventListener('click', function(e){
            e.preventDefault();
            const title = document.querySelector("input[name='title']").value;
            const slug = document.querySelector("input[name='slug']").value;
            const status = document.querySelector("input[type='radio']:checked").value; // corrected to get the value of the checked radio button
            const categoryid = document.querySelector("select").value; // corrected to get the value of the selected option
            const description = document.querySelector("#textarea").value;
            const meta_title = document.querySelector("input[name='meta_title']").value;
            const meta_keywords = document.querySelector("input[name='meta_keywords']").value;
            const meta_description = document.querySelector("textarea[name='meta_description']").value; // corrected to target textarea by name
            ajaxRequest(BASE_URL+'admin/ajax', 'post', {title, slug, status, categoryid, description, meta_title, meta_keywords, meta_description})
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.log(error);
                });
        });

        function ajaxRequest(url, method="post", data={}){
            return fetch(url, {
                method: method,
                headers:{
                    'Content-Type':"application/json",
                    'X-CSRF-TOKEN':document.querySelector("meta[name='csrf-token']").getAttribute("content")
                },
                body: JSON.stringify(data)
            });
        }
    </script>
>>>>>>> 24a356055d79600d855fb1edc4428ac474f91f40
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
</body>
</html>
