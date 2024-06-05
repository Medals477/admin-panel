@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card border-primary border-top border-bottom">
            <div class="card-header">
                <h4>View Blogs</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Category ID</th>
                            <th>Description</th>
                            <th>Meta Title</th>
                            <th>Meta Keywords</th>
                            <th>Meta Description</th>
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
                                    <span class="badge bg-sucess f-6">Active</span>
                                @else
                                    <span class="badge bg-danger f-60">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $item->category_id }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->meta_title }}</td>
                            <td>{{ $item->meta_keyword }}</td>
                            <td>{{ $item->meta_description }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('blog.edit') }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('blog.destroy') }}" method="post">
                                        @csrf
                                        @method('delete')
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
@endsection
