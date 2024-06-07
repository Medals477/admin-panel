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
                <form action="{{ route('blog.store') }}" method="post">
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
                        <div class="col-6 mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="radio" name="status" id="active" class="btn-check" value="1" {{ old('status') == 1 ? "checked":"" }}>
                                <label class="btn btn-outline-success" for="active">Active</label>
                                <input type="radio" name="status" id="inactive" class="btn-check" value="2" {{ old('status') == 2 ? "checked":"" }}>
                                <label for="inactive" class="btn btn-outline-danger">Inactive</label>
                            </div>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" aria-label="Default select example">
                                <option  value="" selected>Select Category ID</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{ old('category_id') ==  $item->id ? "selected":""}}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
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
