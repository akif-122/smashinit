@extends('admin.layouts.master')

@section('styles')
 <!-- This Page CSS -->
 <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
@endsection

@section('content')


    <form action="{{ route('admin.user.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="row mt-3">
            <h3>User Information</h3>
            <!-- ... (similar changes for other input fields) ... -->
            <div class="col-6 form-group">
                <label for="Name">User Member Name:</label>
                <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="User Full Name" value="{{ old('name',$user->name) }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

           
            <div class="col-6 form-group">
                <label for="gender">User Address:</label>
                <input type="text" id="address" name="address" class="form-control form-control-lg" placeholder="User Address" value="{{ old('address',$user->address) }}">
                @error('gender')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
           
            <div class="col-6 form-group mt-3">
                <label for="phone">phone:</label>
                <input type="text" id="phone" name="phone" class="form-control form-control-lg" placeholder="user phone #" value="{{ old('phone',$user->phone) }}">
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-6 form-group mt-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="User Email" value="{{ old('email',$user->email) }}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-6 form-group mt-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control " placeholder="Enter Password" value="{{ old('password') }}">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-6 form-group mt-3">
                <label for="image">user Picture:</label>
                <input type="file" class="form-control" name="image" id="image">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



        </div>

        <div class="row mt-5">
            <button type="submit" class="btn btn-success" style="width:200px;margin:auto;">Update user Details</button>
        </div>
    </form>



@endsection

@section('scripts')
<script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/forms/select2/select2.init.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
    $(document).ready(function () {

       
    });
</script>
@endsection
