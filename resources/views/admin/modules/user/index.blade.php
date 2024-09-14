@extends('admin.layouts.master')

@section('styles')
<link href="{{asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0">Users List</h4>
                
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table id="multi_col_order" class="table table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Phone #</th>
                                <th>Email</th>
                                <th>address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach($users as $user)
                            <tr>
                                <td>{{$count++}}</td>
                                @if($user->image)
                                <td><img src="{{ asset('user_images/' . $user->image) }}" style="width:50px;" alt=""></td>
                                @else
                                <td></td>
                                @endif
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->address}}</td>

                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" class="btn btn-xs btn-warning">Edit</a>
                                        <a href="{{ route('admin.user.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger ms-2">Delete</a>
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

@section('scripts')
@include('admin.includes.index-scripts')
@endsection
