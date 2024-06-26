@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Codes</h4>
                    <form action="{{ route('code.search') }}">
                        <div class="btn-group">
                            <input type="search" name="search" class="form-control" placeholder="Search anything here!">
                            <button class="btn btn-info"><i data-feather="search"></i>Search</button>
                        </div>
                    </form>
                    <a href="{{ route('code.create') }}" class="btn btn-primary">Add Code</a>
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
                    <table class="table table-bordered table-fade table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Header</th>
                                <th>Footer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($code as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ Str::limit($item->header, 50) }}</td>
                                <td>{{ Str::limit($item->footer, 50) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('code.edit',Crypt::encrypt($item->id)) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('code.destroy',Crypt::encrypt($item->id)) }}" method="POST">
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
@endsection
