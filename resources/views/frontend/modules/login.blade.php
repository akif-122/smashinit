@extends('frontend.layouts.master')

@section('styles')
<style>
    .auth-form-wrap {
        padding: 100px 0px;
        /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/frontend/login-bg.webp"); */
        background-color: #E0E0E0;
        background-position: center;
        background-size: cover;

    }

    .form-container h2 {
        text-transform: capitalize;
        font-family: "Poppins", sans-serif;
        position: relative;
        padding-top: 25px;
        font-size: 20px;
        margin-top: 15px;
        color: #000 !important;
        font-weight: 500;

    }




    .form-container {
        max-width: 450px;
        padding: 20px 35px;
        padding-bottom: 30px;
        margin: auto;
    }

    .form-container ul {
        border-bottom: 0;
    }

    .form-container ul li {
        flex: 1;
    }

    .form-container ul li button {
        display: block;
        width: 100%;
        border: none !important;
        border-bottom: 1px solid #000 !important;
        border-top: 3px solid transparent !important;
        background-color: transparent;
        color: #000;
        box-sizing: border-box !important;
    }

    .form-container ul li button.active {
        color: #000 !important;
        border: 1px solid #000 !important;
        border-top: 3px solid #FFD715 !important;
        border-bottom: none !important;
        background: transparent !important;
    }

    .form-container .form-group label {
        margin-bottom: 5px;
        color: #000;
    }

    .form-container .form-group label span {
        color: red;
    }

    .form-container .form-group {
        margin-bottom: 10px;
    }

    .form-container input:focus,
    .form-container input {
        border-radius: 10px !important;
        outline: none;
        color: #000;
        height: 45px;
        padding: 15px;

    }

    .form-container .form-btn {
        margin-top: 25px;

    }

    .form-container .form-btn button {
        all: unset;
        width: 100% !important;
        height: 45px !important;
        display: block;
        color: #000;
        background: #FFD715;
        padding: 5px 40px;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        box-sizing: border-box;
        text-align: center;
        border: 1px solid #FFD715;
        transition: .5s ease;
        border-radius: 8px;
    }

    .form-container button:hover {
        color: #FFD715;
        background-color: #000;
        border-color: #000;
    }

    @media (max-width: 575px) {
        .form-container {
            padding: 20px 20px;
        }


        .form-container ul li button {
            font-size: 13px;
            padding: 5px;
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
        <div class="form-container border">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#login" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#create" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Create Account</button>
                </li>

            </ul>

            <div class="tab-content" id="myTabContent">


                <!-- LOGIN TAB -->

                <div class="tab-pane fade show active" id="login">
                    <h2 class=" text-white">Login</h2>

                    <form action="{{route('user-login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Email <span>*</span></label>
                            <input type="email" class="form-control" required placeholder="Email Address" name="email"
                                value="{{old('email')}}">

                        </div>

                        <div class="form-group">
                            <label for="">Password <span>*</span></label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">

                        </div>
                        <a href="{{"/forget-password"}}" style="text-decoration: underline;">Forgot Password</a>


                        <div class="form-btn text-center">
                            @if ($errors->has('credentials'))
                                <span class="text-danger mb-2">{{ $errors->first('credentials') }}</span>
                            @endif
                            <button class="m-btn">Sign In</button>


                        </div>

                    </form>
                </div>

                <!-- REGISTER TAB -->
                <div class="tab-pane fade" id="create">
                    <h2 class="">Creaet Your Account</h2>

                    <form method="post" action="{{ route('user-save') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Name"
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="Email Address" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required
                                placeholder="Address" value="{{ old('address') }}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" required name="password"
                                placeholder="Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-btn">
                            <button type="submit" class="m-btn">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</section>

<!-- REGISTRATION PAGE END -->




@endsection
@section('scripts')

<script>

</script>
@endsection