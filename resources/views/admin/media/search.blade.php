@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Media List</h4>
                    <form action="{{ route('media.search') }}">
                        <div class="btn-group">
                            <input type="search" name="search" class="form-control" placeholder="Search anything here!">
                            <button class="btn btn-info"><i data-feather="search"></i>Search</button>
                        </div>
                    </form>
                    <a href="{{ route('media.create') }}" class="btn btn-primary">Add Media</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-fade table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Alt</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($media as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <div style="width: 200px">
                                        <img src="{{ asset($item->image) }}" alt="" width="100%">
                                    </div>
                                </td>
                                <td>{{ $item->alt }}</td>
                                <td>{{ $item->created_at->format('d-M-Y') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('media.edit',Crypt::encrypt($item->id)) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('media.destroy',Crypt::encrypt($item->id)) }}" method="POST">
                                            @csrf
                                            @method('destroy')
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
@endsection
