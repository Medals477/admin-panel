@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card border-primary border-top border-bottom">
            <div class="card-header d-flex justify-content-between">
                <h4>View Blogs</h4>
                <form action="{{ route('blog.search') }}">
                    <div class="btn-group">
                        <input type="search" name="search" class="form-control" placeholder="Search anything here!">
                        <button class="btn btn-info"><i data-feather="search"></i>Search</button>
                    </div>
                </form>
                <a href="{{ route('blog.create') }}" class="btn btn-primary">Add Blogs</a>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $key => $item)
                        <tr>
                            <td>{{ $key +1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="badge bg-success f-6">Active</span>
                                @else
                                    <span class="badge bg-danger f-60">Inactive</span>
                                @endif
                            </td>
                            <td>
                                {{ $item->category->name }}
                            </td>
                            <td>
                                <div style="width: 200px">
                                    <img src="{{ asset($item->image) }}" alt="" width="100%"/>
                                </div>
                            </td>
                            <td>{{ Str::limit($item->description , 20) }}</td>
                            <td>{{ $item->created_at->format('d-M-Y') }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('blog.edit',Crypt::encrypt($item->id)) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('blog.destroy',Crypt::encrypt($item->id)) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $blog->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
