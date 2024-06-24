@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Edit Media</h4>
                    <a href="{{ route('media.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i> View Media</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('media.update',Crypt::encrypt($media->id)) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="mb-3">
                                    <img src="{{ asset($media->image) }}" alt="" width="25%" class="img-fluid rounded">
                                </div>
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="alt" class="form-label">Alt</label>
                                <input type="text" name="alt" id="alt" class="form-control" value="{{ old('alt',$media->alt) }}">
                            </div>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection