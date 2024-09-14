@extends('admin.layouts.master')


@section('content')
@include('admin.includes.toasters')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0" style="display: inline-block;">Create Category</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.category.save')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group col-6">
                        <label for="">Category Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-6 form-group mt-3">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-3 col-6">
                        @csrf
                        <button class="btn btn-success">Save</button>
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
