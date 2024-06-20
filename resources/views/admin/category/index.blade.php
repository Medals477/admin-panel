@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card border-success border-top border-bottom">
            <div class="card-header d-flex justify-content-between">
                <h4>Category List</h4>
                <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
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
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Created_At</th>
                            <th>Blog Count</th>
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
                            <td>{{ Str::limit($item->description, 50) }}</td>
                            <td>{{ $item->created_at->format('d-M-Y') }}</td>
                            <td>{{ $item->blog->count() }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('category.edit', Crypt::encrypt($item->id)) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('category.destroy', Crypt::encrypt($item->id)) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger rounded-0 rounded-end">Delete</button>
                                    </form>
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
