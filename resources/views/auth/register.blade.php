@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        <div class="col mx-auto">
            <div class="card mb-0">
                <div class="card-body">
                    @foreach ($errors->all() as $item)
                        <span class="text-danger">{{ $item }}</span>
                    @endforeach
                    <div class="p-4">
                        <div class="mb-3 text-center">
                            <img src="{{ asset('assets/back/images/logo-icon.png') }}" width="60" alt="" />
                        </div>
                        <div class="text-center mb-4">
                            <h5 class="">Syndron Admin</h5>
                            <p class="mb-0">Please fill the below details to create your account</p>
                        </div>
                        <div class="form-body">
                            <form class="row g-3" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label for="inputUsername" class="form-label">Username</label>
                                    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="inputUsername" placeholder="Jhon" value="{{ old('name') }}"/>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="inputEmailAddress" placeholder="example@user.com" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="text" name="password" id="password" class="form-control @error('password')is-invalid @enderror" placeholder="Please enter author name"/>
                                        @error('password')
                                            <span class="text-danger" >{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <label for="confiram_password" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="text" name="confirmation_password" id="confirmation_password" class="form-control @error('confiram_password')is-invalid @enderror" placeholder="Please enter author name"/>
                                        @error('confiram_password')
                                            <span class="text-danger" >{{$message}}</span>
                                        @enderror
                                    </div> --}}
                                </div>
                                <div class="col-12">
                                    <label for="inputSelectCountry" class="form-label">Country</label>
                                    <select class="form-select" id="inputSelectCountry" aria-label="Default select example">
                                        <option selected>India</option>
                                        <option value="1">United Kingdom</option>
                                        <option value="2">America</option>
                                        <option value="3">Dubai</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="agree" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Sign up</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center ">
                                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign in here</a></p>
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
