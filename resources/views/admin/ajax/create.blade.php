@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card border-primary border-top border-bottom">
            <div class="card-header d-flex justify-content-between">
                <h4>Ajax Create Blog</h4>
                <a href="{{ route('blog.index') }}" class="btn btn-primary">View Ajax Blogs</a>
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
                            <select name="category_id" id="category_id" class="form-control" aria-label="Default select example" value="{{ old('category_id') }}">
                                <option selected>Select Category ID</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? "selected":"" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control @error('description') is-inavalid @enderror" id="description" cols="10" rows="10" placeholder="Please Enter Description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" id="meta_title" placeholder="Please Enter Meta Title" value="{{ old('meta_title') }}">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" placeholder="Please Enter Meta Keywords" value="{{ old('meta_keywords') }}">
                            @error('meta_keywords')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" class="form-control @error('meta_description') is-invalid @enderror" cols="10" rows="10" placeholder="Please Enter Meta Description">{{ old('meta_description') }}</textarea>
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