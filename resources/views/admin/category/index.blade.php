@extends('layouts.admin')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="card border-success border-top border-bottom">
            <div class="card-header">
                <h4>Category List</h4>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Meta Title</th>
                            <th>Meta Keywords</th>
                            <th>Meta Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $category as $key => $item )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>
                                @if ($item->status == 1)
                                <span class="badge bg-success f-6">Active</span>
                            @else
                                <span class="badge bg-danger f-6">Inactive</span>
                            @endif
                            </td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->meta_title }}</td>
                            <td>{{ $item->meta_keywords}}</td>
                            <td>{{ $item->meta_description }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('category.edit', Crypt::encrypt($item->id)) }}" class="btn btn-info">Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
