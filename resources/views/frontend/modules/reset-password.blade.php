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
        margin-bottom: 30px;
        font-size: 26px;
        margin-top: 15px;

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
        border-bottom: 1px solid #fefefe !important;
        border-top: 3px solid transparent !important;
        background-color: transparent;
        color: #fefefe;
        box-sizing: border-box !important;
    }

    .form-container ul li button.active {
        color: #FFD715 !important;
        border: 1px solid #fefefe !important;
        border-top: 3px solid #FFD715 !important;
        border-bottom: none !important;
        background: transparent !important;
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

    .form-container .form-btn button {
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

            <div class="">
                <h2 class="text-center text-white">Reset Password</h2>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="">New Password:</label>
                        <input type="password" class="form-control" required placeholder="Enter New Password"
                            name="password" value="">

                    </div>

                    <div class="form-btn text-center">
                        <button>Update Password</button>
                    </div>

                </form>
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