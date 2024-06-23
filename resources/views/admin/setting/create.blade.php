@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Create Setting</h4>
                    <a href="{{ route('setting.index') }}" class="btn btn-primary">View Setting</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="website_name" class="form-label">Website Name <span class="text-danger">*</span></label>
                                <input type="text" name="website_name" class="form-control @error('website_name')is-invalid @enderror" id="website_name" placeholder="Please Enter Website Name" value="{{ old('website_name') }}">
                                @error('website_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="website_url" class="form-label">Website URL <span class="text-danger">*</span></label>
                                <input type="text" name="website_url" class="form-control @error('website_url')is-invalid @enderror" id="website_name" placeholder="Please Enter Website URL" value="{{ old('website_url') }}">
                                @error('website_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                                <input type="number" name="mobile" id="mobile" class="form-control @error('mobile')is-invalid @enderror" placeholder="Please Enter Mobile Number" value="{{ old('mobile') }}">
                                @error('mobile')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control @error('email')is-invalid @enderror" placeholder="Please Enter Your Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                <textarea name="address" id="address" class="form-control @error('address')is-invalid @enderror" cols="10" rows="10" placeholder="Please Enter Address">{{ old('description') }}</textarea>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="logo" class="form-label">Logo <span class="text-danger">*</span></label>
                                <input type="file" name="logo" class="form-control @error('logo')is-invalid @enderror" id="logo">
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="logo_alt" class="form-label">Logo ALT <span class="text-danger">*</span></label>
                                <input type="text" name="logo_alt" id="logo_alt" class="form-control @error('logo_alt')is-invalid @enderror" placeholder="Please Enter Logo Alternative" value="{{ old('logo_alt') }}">
                                @error('logo_alt')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="favicon" class="form-label">Favicon <span class="text-danger">*</span></label>
                                <input type="file" name="favicon" class="form-control @error('favicon')is-invalid @enderror" id="favicon">
                                @error('favicon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="favicon_alt" class="form-label">Favicon ALT <span class="text-danger">*</span></label>
                                <input type="text" name="favicon_alt" id="favicon_alt" class="form-control @error('favicon_alt')is-invalid @enderror" placeholder="Please Enter Logo Alternative" value="{{ old('favicon_alt') }}">
                                @error('favicon_alt')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="robots" class="form-label">Robots <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="radio" name="robots" id="index" class="btn-check" value="1" {{ old('robots') == 1 ? "checked":"" }}>
                                    <label class="btn btn-outline-success" for="index">Index</label>
                                    <input type="radio" name="robots" id="noindex" class="btn-check" value="2" {{ old('robots') == 2 ? "checked":"" }}>
                                    <label for="noindex" class="btn btn-outline-danger">No Index</label>
                                </div>
                                @error('robots')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="form-control" cols="10" rows="10" placeholder="Please Enter Description">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-6 md-3">
                                <label for="meta_title" class="form-label">Meta Title <span class="text-danger">*</span></label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title')is-invalid @enderror" placeholder="Please Enter Meta Title" value="{{ old('meta_title') }}">
                                @error('meta_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="meta_keywords" class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control @error('meta_keywords')is-invalid @enderror" placeholder="Please Enter Meta Keywords" value="{{ old('meta_keywords') }}">
                                @error('meta_keywords')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" cols="10" rows="10" class="form-control" placeholder="Please Enter Meta Description">{{ old('meta_description') }}</textarea>
                            </div>
                            <div class="col-6 d-grid mx-auto">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
