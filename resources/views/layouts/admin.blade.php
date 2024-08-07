<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('assets/back/images/favicon-32x32.png') }}" type="image/png" />
	<link href="{{ asset('assets/back/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/back/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/back/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/back/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/back/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/back/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets/back/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/back/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('assets/back/css/dark-theme.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/back/css/semi-dark.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/back/css/header-colors.css') }}"/>
	@section('css')

	@show
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
	{{-- <script src="{{ asset('assets/back/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/back/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> --}}
	<script src="{{ asset('assets/back/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/back/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.4.5.1/full-all/ckeditor.js"></script>

	<script src="{{ asset('assets/back/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets/back/js/app.js') }}"></script>
	<script>
        try {
            
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

    } catch (error) {
            // console.log(error)
        }
    </script>
    <script>
        try {
            CKEDITOR.replace( 'description' );

            let addNewRowBtn = document.querySelector("#addNewRowBtn");
            let i = 0;
            addNewRowBtn.addEventListener('click', function(e) {
                i++;
                let newRow = document.querySelector("#newRow");
                let newElement = document.createElement("div");
                newElement.classList.add('newRow');
                let html = `
                        <div class="col-12 mb-3">
                            <label for="question${i}" class="form-label">Question ${i}<span class="text-danger">*</span></label>
                            <input type="text" name="question[]" id="question${i}" class="form-control" placeholder="Please enter question here ${i}!"/>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="answer${i}" class="form-label">Answer ${i}<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <textarea name="answer[]" id="answer${i}" class="form-control" placeholder="Please enter answer here ${i}!"></textarea>
                                <button type="button" onclick="removeElement(this)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <div>
                        </div>
                        `
                newRow.append(newElement)
                newElement.innerHTML +=html;
            });

            function removeElement(evt) {
                evt.closest('.newRow').remove()
            } 
        } catch (error) {

        }
        

        function deleteConfirmation (){
            let result = confirm('Are you sure to delete this record!');
            if(result == true)
                return true;
            else{
                return false;
            }
        }
    </script>
    
</body>
</html>
