@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="d-flex justify-content-between card-header">
                    <h4>Create Codes</h4>
                    <a href="{{ route('code.index') }}" class="btn btn-primary">View Codes</a>
                </div>
                    <div class="card-body">
                        <form action="{{ route('code.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="header" class="form-label">Headers <span class="text-danger">*</span></label>
                                    <textarea name="header" id="header" class="form-control @error('header')is-invalid @enderror" placeholder="Please Enter Header" cols="10" rows="10">{{ old('header') }}</textarea>
                                    @error('header')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="footer" class="form-label">Footer <span class="text-danger">*</span></label>
                                    <textarea name="footer" id="footer" class="form-control @error('footer')is-invalid @enderror" placeholder="Please Enter Footer" cols="10" rows="10">{{ old('footer') }}</textarea>
                                    @error('footer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
