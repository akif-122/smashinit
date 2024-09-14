<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro is powerful and clean admin dashboard template">
    <meta name="robots" content="noindex,nofollow">
    <title>SMASH 'IN' IT</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('frontend/assets/img/icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/assets/img/icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('frontend/assets/img/icon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/assets/img/icon.png')}}">
    <link rel="manifest" href="{{asset('frontend/assets/img/favicons/manifest.json')}}">
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    
   
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
    .auth-wrapper{
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/assets/images/login-bg.webp') no-repeat center center; background-size: cover;
    }
    .auth-wrapper .box-title{
        color: #fefefe;
        text-align: center;
    }
    .auth-wrapper .auth-box{
        background-color: #000 !important;
        border-radius: 0 !important;
        max-width: 400px;
    }
    .auth-wrapper .auth-box input{
        background: #151515 !important;
        border: none;
        outline: none;
        height: 50px;
        padding: 0 15px;
        color: #fefefe;
    }
    .auth-wrapper .auth-box button{
        background-color: #FFBE00;
        border-radius: 0;
        height: 50px;
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        border: 1px solid #FFBE00;
        transition: .5s ease;
    }
    .auth-wrapper .auth-box button:hover{
        color: #FFBE00;
        background-color: #151515;
    }
</style>

</head>

<body>
    <div class="main-wrapper">

       
       
        <!-- -------------------------------------------------------------- -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Login box.scss -->
        <!-- -------------------------------------------------------------- -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
            <div class="auth-box p-4 bg-white rounded">
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3">Admin Login</h3>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3 form-material" id="loginform" method="POST" action="{{route('admin.login')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input class="form-control" name="email" type="text" required="" placeholder="Email"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="">
                                        <input class="form-control" name="password" type="password" required="" placeholder="Password"> </div>
                                </div>

                                <div class="form-group text-center mt-4 mb-3">
                                    <div class="col-xs-12">
                                        <button class="btn  d-block w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- Login box.scss -->
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- -------------------------------------------------------------- -->
    <!-- This page plugin js -->
    <!-- -------------------------------------------------------------- -->

    <script>
        $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
</body>

</html>
