@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card border-primary border-top border-bottom mb-5">
            <div class="card-header d-flex justify-content-between">
                <h4>Edit Blog</h4>
                <a href="{{ route('blog.index') }}" class="btn btn-primary">View Records</a>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('blog.update',Crypt::encrypt($blog->id)) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control @error('title')is-invalid @enderror" placeholder="Please Enter Title" value="{{ old('title',$blog->title) }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" name="slug" id="slug" class="form-control @error('slug')is-invalid @enderror" placeholder="Please Enter Slug" value="{{ old('slug',$blog->slug) }}">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="radio" name="status" id="active" class="btn-check" value="1" {{ old('status',$blog->status) == 1 ? "checked":"" }}>
                                <label class="btn btn-outline-success" for="active">Active</label>
                                <input type="radio" name="status" id="inactive" class="btn-check" value="2" {{ old('status',$blog->status) == 2 ? "checked":"" }}>
                                <label for="inactive" class="btn btn-outline-danger">Inactive</label>
                            </div>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                            <select name="category_id" id="category_id" class="form-control" aria-label="Default select example" value="{{ old('category_id',$blog->category_id) }}">
                                <option selected>Select Category ID</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{ old('category_id',$blog->category_id) == $item->id ? "selected":"" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <img src="{{ asset($blog->image) }}" alt="" width="100%" class="img-fluid rounded">
                            <label for="image" for="image">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror"/>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="10" rows="10" placeholder="Please Enter Description">{{ old('description',$blog->description) }}</textarea>
                        </div>
                        <div class="col-6 md-3">
                            <label for="meta_title" class="form-label">Meta Title <span class="text-danger">*</span></label>
                            <input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title')is-invalid @enderror" placeholder="Please Enter Meta Title" value="{{ old('meta_title',$blog->meta_title) }}">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control @error('meta_keywords')is-invalid @enderror" placeholder="Please Enter Meta Keywords" value="{{ old('meta_keywords',$blog->meta_keywords) }}">
                            @error('meta_keywords')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" cols="10" rows="10" class="form-control" placeholder="Please Enter Meta Description">{{ old('meta_description',$blog->meta_description) }}</textarea>
                        </div>
                        <div class="col-6 d-grid mx-auto">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card border-info border-top border-bottom">
            <div class="card-header d-flex justify-content-between">
                <h4>F&Q</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('blog.faqs') }}" method="post">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}"/>
                        @foreach ($blog->faqs as $key => $item)
                            <div class="newRow">
                                <div class="col-12 mb-3">
                                    <label for="question{{ $key+1 }}" class="form-label">Question {{ $key+1 }}<span class="text-danger">*</span></label>
                                    <input type="text" name="question[]" id="question{{ $key+1 }}" class="form-control @error('question.'.$key)is-invalid @enderror" placeholder="Please enter question here!" value="{{ $item->question }}"/>
                                @error('question.'.$key)
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="answer{{ $key+1 }}" class="form-label">Answer {{ $key+1 }}<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <textarea name="answer[]" id="answer{{ $key+1 }}" class="form-control @error('answer.'.$key)is-invalid @enderror" placeholder="Please enter answer here!">{{ $item->answer }}</textarea>
                                        <button type="button" onclick="removeElement(this)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                @error('answer.'.$key)
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                        @endforeach
                        @foreach (old('question', []) as $key => $oldQuestion)
                            <div class="newRow">
                                <div class="col-12 mb-3">
                                    <label for="question{{ $key+1 }}" class="form-label">Question {{ $key+1 }}<span class="text-danger">*</span></label>
                                    <input type="text" name="question[]" id="question{{ $key+1 }}" class="form-control @error('question.'.$key)is-invalid @enderror" placeholder="Please enter question here!" value="{{ $oldQuestion }}"/>
                                @error('question.'.$key)
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="answer{{ $key+1 }}" class="form-label">Answer {{ $key+1 }}<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <textarea name="answer[]" id="answer{{ $key+1 }}" class="form-control @error('answer.'.$key)is-invalid @enderror" placeholder="Please enter answer here!">{{ old('answer.'.$key) }}</textarea>
                                        <button type="button" onclick="removeElement(this)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                @error('answer.'.$key)
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                        @endforeach
                        <div id="newRow">
                        </div>
                        <div>
                            <button class="btn btn-success text-light"><i class="fa fa-check-circle"></i>Submit</button>
                            <button type="button" class="btn btn-info text-light" id="addNewRowBtn"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
