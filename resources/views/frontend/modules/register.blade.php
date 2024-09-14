@extends('frontend.layouts.master')

@section('styles')

<style>
    .auth-form-wrap {
        padding: 100px 0px;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/frontend/signup-bg.jpg");
        background-position: center;
        background-size: cover;

    }

    .form-container h2 {
        text-transform: capitalize;
        font-family: "Poppins", sans-serif;
        position: relative;
        margin-bottom: 30px;

    }

    .form-container h2::after {
        content: "";
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 150px;
        border-bottom: 1px solid #FFD715;
    }

    .form-container {
        max-width: 450px;
        background-color: #000;
        padding: 20px 35px;
        padding: 30px;
        margin: auto;
    }

    .form-container .form-group label {
        margin-bottom: 5px;
        color: #fefefe;
    }

    .form-container .form-group {
        margin-bottom: 10px;
    }

    .form-container input:focus,
    .form-container input {
        background: #151515;
        border: none !important;
        outline: none;
        color: #fefefe;
        height: 50px;
        padding: 15px;
    }

    .form-container .form-btn {
        margin-top: 25px;

    }

    .form-container button {
        width: 100% !important;
        height: 50px !important;
        display: block;
        all: unset;
        color: #151515;
        background: #FFD715;
        padding: 5px 40px;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        box-sizing: border-box;
        text-align: center;
        border: 1px solid #FFD715;
        transition: .5s ease;
    }

    .form-container button:hover {
        color: #FFD715;
        background-color: transparent;
    }


    @media (max-width: 575px) {
        .form-container {
            padding: 20px 20px;
        }

        .form-container input:focus,
        .form-container input {
            height: 40px;
        }

    }
</style>


@endsection

@section('content')


<!-- REGISTRATION PAGE -->

<section class="auth-form-wrap">

    <div class="container">
        <div class="form-container">

            <h2 class="text-center text-white">Sign up</h2>

            <form method="post" action="{{ route('user-save') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Name" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Email Address" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone" value="{{ old('phone') }}">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required placeholder="Address" value="{{ old('address') }}">
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" required name="password" placeholder="Password">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-btn">
                    <button type="submit">Sign Up</button>
                </div>
            </form>

        </div>
    </div>

</section>

<!-- REGISTRATION PAGE END -->





@endsection
@section('scripts')

<script>

</script>
@endsection