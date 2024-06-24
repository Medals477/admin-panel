@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top border-bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Setting List</h4>
                    <a href="{{ route('setting.create') }}" class="btn btn-primary">Add Setting</a>
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
                    <table class="table table-bordered table-fade table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Website Name</th>
                                <th>Website URL</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Logo</th>
                                <th>Logo ALT</th>
                                <th>Favicon</th>
                                <th>Favicon ALT</th>
                                <th>Robots</th>
                                <th>Description</th>
                                <th>Created AT</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($setting as $key => $item )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->website_name }}</td>
                                <td>{{ $item->website_url }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ Str::limit($item->address,20) }}</td>
                                <td>
                                    <div style="width: 80px">
                                        <img src="{{ asset($item->logo) }}" alt="" width="100%"/>
                                    </div>
                                </td>
                                <td>{{ $item->logo_alt }}</td>
                                <td>
                                    <div style="width: 80px">
                                        <img src="{{ asset($item->favicon) }}" alt="" width="100%"/>
                                    </div>
                                </td>
                                <td>{{ $item->favicon_alt }}</td>
                                <td>
                                    @if ($item->robots == 1)
                                        <span class="badge bg-success f-6">Index</span>
                                    @else
                                        <span class="badge bg-danger f-6">No Index</span>
                                    @endif
                                </td>
                                <td>{{ Str::limit($item->description , 20) }}</td>
                                <td>{{ $item->created_at->format('d-M-Y') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('setting.edit',Crypt::encrypt($item->id)) }}" class="btn btn-info">Edit</a>
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
