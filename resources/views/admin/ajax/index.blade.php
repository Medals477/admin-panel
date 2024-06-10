@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card border-primary border-top border-bottom">
            <div class="card-header d-flex justify-content-between">
                <h4>Create Blog</h4>
                <a href="{{ route('blog.index') }}" class="btn btn-primary">View Blogs</a>
            </div>
            <div class="card-body">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control @error('title')is-invalid @enderror" placeholder="Please Enter Title" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" name="slug" id="slug" class="form-control @error('slug')is-invalid @enderror" placeholder="Please Enter Slug" value="{{ old('slug') }}">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div>
                            <button id="submitBtn" type="button" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection