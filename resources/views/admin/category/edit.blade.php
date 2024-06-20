@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Edit Category</h4>
                    <a href="{{ route('category.index') }}" class="btn btn-primary">View Records</a>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissable fade show" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('category.update',Crypt::encrypt($category->id)) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Please Enter Category Name" value="{{ old('name',$category->name) }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="slug" class="form-label">Category Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" placeholder="Please Enter Category Slug" value="{{ old('slug',$category->slug) }}">
                                @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <div>
                                    <input type="radio" class="btn-check" id="active" name="status" value="1" {{ old('status',$category->status) == 1 ? "checked":"" }}>
                                    <label class="btn btn-outline-success" for="active">Active</label>
                                    <input type="radio" class="btn-check" name="status" id="inactive" value="2" {{ old('status',$category->status) == 2 ? "checked":"" }}>
                                    <label class="btn btn-outline-danger" for="inactive">Inactive</label>
                                </div>
                                @error('status')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control @error('description')is-invalid @enderror" cols="10" rows="10" placeholder="Please Enter Description">{{ old('description',$category->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title')is-invalid @enderror" placeholder="Please Enter Meta Title" value="{{ old('meta_title',$category->meta_title) }}">
                                @error('meta_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control @error('meta_keywords')is-invalid @enderror" id="meta_keywords" placeholder="Please Enter Meta Keywords" value="{{ old('meta_keywords',$category->meta_keywords) }}">
                                @error('meta_keywords')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" cols="10" rows="10" class="form-control @error('meta_description')is-invalid @enderror" placeholder="Please Enter Meta Description">{{ old('meta_description',$category->meta_description) }}</textarea>
                                @error('meta_description')
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
