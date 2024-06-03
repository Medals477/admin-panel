@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border-success border-top border-bottom">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="name" class="form-label">Category Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Please enter category name!" value="{{ old('name') }}" />
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="slug" class="form-label">Category Slug <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="slug" name="slug"
                                    class="form-control @error('slug') is-invalid @enderror"
                                    placeholder="please enter slug name!" value="{{ old('slug') }}" />
                                @error('slug')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <div>
                                    <input type="radio" class="btn-check" id="active" name="status" value="1">
                                    <label class="btn btn-outline-success" for="active">Active</label>
                                    <input type="radio" class="btn-check" name="status" id="inactive" value="2">
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
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10"
                                    placeholder="Please enter description here">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="meta_title" class="form-label">Meta Title <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="meta_title" name="meta_title"
                                    class="form-control @error('meta_title') is-invalid @enderror"
                                    placeholder="Please enter meta title name!" value="{{ old('meta_title') }}" />
                                @error('meta_title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="meta_keywords" class="form-label">Meta Keywords <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="meta_keywords" name="meta_keywords"
                                    class="form-control @error('meta_keywords') is-invalid @enderror"
                                    placeholder="Please enter meta keywords name!" value="{{ old('meta_keywords') }}" />
                                @error('meta_keywords')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control"
                                    placeholder="Please enter meta description here">{{ old('meta_description') }}</textarea>
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
