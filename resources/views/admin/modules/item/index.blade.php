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
                <h4 class="card-title mb-0" style="display: inline-block;">Item List</h4>
                <a href="{{route('admin.item.create')}}" style="float:right;"><button class="btn btn-success">Add New Product</button></a>
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table id="multi_col_order" class="table table-bordered display"
                        style="width:100%">
                        <thead>
                            <tr>
                              <th>#</th>
                              <th>Image</th>
                              <th>Item Title</th>
                              <th>Price</th>
                              <th>Category</th>
                              <th>Details</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach($items as $item)
                            <tr>
                                <td>{{$count++}}</td>
                                <td><img src="{{ asset('item_images/' . $item->image) }}" style="width:50px;" alt=""></td>
                                <td>{{$item->title}}</td>
                                <td>&pound;{{$item->price}}</td>
                                <td>
                                    <div class="mb-1">
                                        <span class="badge rounded-pill font-weight-medium bg-light-primary text-primary">{{$item->category->title}}</span>
                                    </div>
                                </td>
                                <td><a href="{{route('admin.item.details',['id' => $item->id])}}" target="_blank"><button class="btn btn-xs btn-success">Details</button></td>
                                    @if($item->status == 1)
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        </div>
                                    </td>
                                    @elseif($item->status == 0)
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        </div>
                                    </td>
                                    @endif
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.item.edit', ['id' => $item->id]) }}" class="btn btn-xs btn-warning">Edit</a>
                                            <a href="{{ route('admin.item.delete', ['id' => $item->id]) }}" class="btn btn-xs btn-danger ms-2">Delete</a>
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
