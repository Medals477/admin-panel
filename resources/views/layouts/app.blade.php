<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('assets/back/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/back/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/back/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/back/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/back/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/back/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/back/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/back/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets/back/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/back/css/icons.css') }}" rel="stylesheet">
<body>
    <div id="app">
        <main class="py-4">
            <div class="wrapper">
                <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                    @yield('content')
                </div>
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
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset('assets/back//js/app.js') }}"></script>
</body>
</html>
