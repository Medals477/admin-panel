@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Create Media</h4>
                    <a href="{{ route('media.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i> View Media</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control">    
                            </div>
                            <div class="col-6 mb-3">
                                <label for="alt" class="form-label">Alt</label>
                                <input type="text" name="alt" id="alt" class="form-control" placeholder="Please Enter Alternative For Image" value="{{ old('alt') }}">
                            </div>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
