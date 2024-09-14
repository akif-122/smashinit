@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/libs/apexcharts/dist/apexcharts.css')}}">
    <link href="{{asset('assets/extra-libs/css-chart/css-chart.css')}}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{asset('assets/libs/jvectormap/jquery-jvectormap.css')}}" rel="stylesheet" />
@endsection

@section('content')

<div class="container-fluid dashboard">
    <div class="row ">
        <!-- Column -->
        <div class="col-lg-4  col-md-6 px-2">
            <div class="card box-card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <a href="{{route('admin.category.index')}}">
                            <div
                            class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-info">
                            <i data-feather="monitor" class="fill-white feather-lg"></i>
                        </div>
                    </a>
                        <div class="ms-2 align-self-center">
                            <h3 class="mb-0">{{\App\Models\Category::all()->count()}}</h3>
                            <h6 class="text-muted mb-0">Total Categories</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-6 px-2 ">
            <div class="card box-card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <a href="{{route('admin.item.index')}}">
                            <div
                                class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-info">
                                <i data-feather="monitor" class="fill-white feather-lg"></i>
                            </div>
                        </a>
                        <div class="ms-2 align-self-center">
                            <h3 class="mb-0">{{\App\Models\Item::all()->count()}}</h3>
                            <h6 class="text-muted mb-0">Total Products</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4 col-md-6 px-2 ">
            <div class="card box-card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <a href="{{route('admin.item.index')}}">
                            <div
                                class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-info">
                                <i data-feather="monitor" class="fill-white feather-lg"></i>
                            </div>
                        </a>
                        <div class="ms-2 align-self-center">
                            <h3 class="mb-0">{{\App\Models\Order::all()->count()}}</h3>
                            <h6 class="text-muted mb-0">Total Orders</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Column -->
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<!-- Vector map JavaScript -->
<script src="{{asset('assets/libs/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-us-aea-en.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('dist/js/pages/dashboards/dashboard3.js')}}"></script>
@endsection
