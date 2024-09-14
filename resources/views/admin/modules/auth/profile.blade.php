@extends('admin.layouts.master')


@section('content')


    <form action="{{ route('admin.user.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="row mt-3">
            <h3>Admin Profile Information</h3>
           
            <div class="col-6 form-group">
                <label for="Name">Name:</label>
                <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Full Name" value="{{ old('name',$user->name) }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-6 form-group">
                <label for="gender">Address:</label>
                <input type="text" id="address" name="address" class="form-control form-control-lg" placeholder="Admin Address" value="{{ old('address',$user->address) }}">
                @error('gender')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
           
            <div class="col-6 form-group mt-3">
                <label for="phone">phone:</label>
                <input type="text" id="phone" name="phone" class="form-control form-control-lg" placeholder="phone #" value="{{ old('phone',$user->phone) }}">
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-6 form-group mt-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" value="{{ old('email',$user->email) }}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-6 form-group mt-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control " placeholder="Password" value="{{ old('password') }}">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-6 form-group mt-3">
                <label for="image">Admin Picture:</label>
                <input type="file" class="form-control" name="image" id="image">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



        </div>

        <div class="row mt-5">
            <button type="submit" class="btn btn-success" style="width:200px;margin:auto;">Update Admin Details</button>
        </div>
    </form>



@endsection


