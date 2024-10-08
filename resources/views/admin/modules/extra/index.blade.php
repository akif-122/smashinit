@extends('admin.layouts.master')

@section('styles')
<link href="{{asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}">
@endsection

@section('content')
@include('admin.includes.toasters')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0" style="display: inline-block;">Extras List</h4>
                <a href="{{route('admin.extra.create')}}" style="float:right;"><button class="btn btn-success">Add New Extra</button></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi_col_order" class="table table-bordered display"
                        style="width:100%">
                        <thead>
                            <tr>
                              <th>#</th>
                              <th>Category Title</th>
                              <th>Items</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach($extras as $key)
                            <tr>
                                <td>{{$count++}}</td>
                                <td>{{$key->title}}</td>

                                <td><a href=""><button class="btn btn-xs btn-success">Details</button></td>

                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheck{{$key->id}}" @if($key->status == 1) checked @endif data-extra-id="{{$key->id}}">
                                        </div>
                                    </td>

                                <td>
                                    <a href="{{route('admin.extra.edit',['id' => $key->id])}}"><button class="btn btn-xs btn-warning">Edit</button></a>
                                    <a href="{{route('admin.extra.delete',['id' => $key->id])}}"><button class="btn btn-xs btn-danger">Delete</button></a>
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
<script>
    $(document).ready(function() {
        $('.form-check-input').on('click', function() {
            var extraId = $(this).data('extra-id');

            // Reload the page with the updated status
            window.location.href = '{{ route("admin.extra.status", ["id" => "__ID__"]) }}'.replace('__ID__', extraId);
        });
    });
</script>
@endsection
