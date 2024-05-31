@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        <div class="col mx-auto">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="p-4">
                        <div class="mb-3 text-center">
                            <img src="{{ asset('assets/back/images/logo-icon.png') }}" width="60" alt="" />
                        </div>
                        <div class="text-center mb-4">
                            <h5 class="">Syndron Admin</h5>
                            <p class="mb-0">Please log in to your account</p>
                        </div>
                        <div class="form-body">
                            <form class="row g-3" action="{{ route('home') }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="inputEmailAddress" placeholder="jhon@example.com">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="text" name="password" id="password" class="form-control @error('password')is-invalid @enderror" placeholder="Please enter author name" value="{{ old('password') }}"/>
                                        @error('password')
                                            <span class="text-danger" >{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">	<a href="#">Forgot Password ?</a>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center ">
                                        <p class="mb-0">Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection
