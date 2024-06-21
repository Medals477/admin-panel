@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card border border-success border-top bottom">
                <div class="card-header d-flex justify-content-between">
                    <h4>Multiple Media List</h4>
                    <a href="{{ route('media.dynamic') }}" class="btn btn-primary">View Records</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-fade table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($media as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <div style="width: 200px">
                                        <img src="{{ $item->$image }}" alt="" width="100%">
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('media.multiple.edit',Crypt::encrypt($item->id)) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('media.multiple.delete',Crypt::encrypt($item->id)) }}" class="btn btn-danger">
                                            @csrf
                                            @method('delete')
                                            <button class=""></button>
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