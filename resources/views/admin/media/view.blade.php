@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Create Media</h4>
                    <a href="{{ route('media.index') }}" class="btn btn-primary">View Media</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('media.multiple.image') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @foreach ($errors->all() as $item)
                                <span class="text-danger">
                                    {{ $item }}
                                </span>
                            @endforeach
                            <div class="col-8 m-auto">
                                <label for="image" class="form-label">Image</label>
                                <div class="input-group">
                                    <input type="file" name="image[]" id="image" class="form-control" multiple/>    
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
