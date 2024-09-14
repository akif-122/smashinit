@extends('admin.layouts.master')


@section('content')
@include('admin.includes.toasters')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0" style="display: inline-block;">Update Category</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.category.update')}}" method="post">
                    <div class="form-group col-6">
                        <label for="">Category Title</label>
                        <input type="text" name="title" class="form-control" value="{{$category->title}}" required>
                    </div>
                    <div class="form-group mt-3 col-6">
                        @csrf
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <button class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('admin.includes.index-scripts')

@endsection
