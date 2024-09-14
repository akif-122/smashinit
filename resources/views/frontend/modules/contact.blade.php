@extends('frontend.layouts.master')

@section('styles')
<style>
    body {
        background: #151515;
    }

    h1,h2,h3,h4,h5,h6,p,span,div {
        font-family: "Poppins", sans-serif !important;
    }

    .vs-team-wrapper h2,
    .vs-team-wrapper p,
    .vs-about-wrapper .about-text,
    .vs-about-wrapper .sec-title1 {
        color: #fff;
        font-family: "Poppins", sans-serif;

    }

    .vs-contact-wrapper .contact-form {
        background-color: #000 !important;
    }

    .vs-contact-wrapper .contact-form .form-group {
        margin-bottom: 15px;
    }

    .vs-contact-wrapper .contact-form textarea,
    .vs-contact-wrapper .contact-form input {
        background: #151515;
        border: none !important;
        outline: none;
        color: #fefefe;
    }

    .contact-information-layout1 h2 {
        color: #fff !important;
        font-size: 24px;
        font-family: "Poppins", sans-serif;

    }

    .contact-information-layout1 p {
        color: #fff !important;
        opacity: 0.9;
        font-weight: 400 !important;
    }

    .contact-information-layout1 p strong {
        font-weight: 400 !important;
    }

    .contact-form button {
        all: unset;
        color: #000;
        font-size: 16px;
        font-weight: 500;
        background: #FFD715 !important;
        padding: 10px 16px;
        border-radius: 6px;
        width: 100px;
        text-align: center;

    }

    .breadcumb-menu-style1 li a:hover,
    .h3 {
        color: #FFD715;
    }

    .contact-info > i {
        color: #FFD715;
    }
    .phone{
        color: #FFD715 !important;
        font-weight: 500;
        font-size: 28px;
    }
</style>

@endsection

@section('content')


<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit  mb-30"
    data-vs-img="/frontend/assets/img/about/breadcumb-bg-1-1.jpg" data-overlay="black" data-opacity="6">
    <div class="container z-index-common">
        <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
            <h1 class="breadcumb-title sec-title1 text-white my-0">Contact Us</h1>
            <ul class="breadcumb-menu-style1 bg-white">
                <li><a href="{{route('home')}}"><i class="fal fa-home text-theme"></i>Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
      Contact Form Area    
    ==============================-->
<section class="vs-contact-wrapper vs-contact-layout2 py-lg-150 py-60">
    <div class="container">
        <div class="row align-items-center mb-lg-80 mb-40">
            <div class="col-lg-6">
                <form
                    class="contact-form contact-form-style2 bg-smoke mb-4 mb-lg-0 px-15 px-md-40 py-30 py-md-40 px-lg-60 py-lg-60"
                    action="mail.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control border-shadow" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control border-shadow"
                            placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control border-shadow" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control border-shadow" name="message"
                            placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group mb-0">
                        <button name="submit" type="submit" >Send</button>
                    </div>
                </form>
                <p class="form-messages mt-20 mb-0 text-center"></p>
            </div>
            <div class="col-lg-6">
                <div class="contact-information-layout1 list-style-none pl-xl-30">
                    <div class="box mb-20 mb-lg-40">
                        <h2 class="h4 mb-10">Opening Hours</h2>
                        <ul>
                            <li class="d-flex justify-content-between  border-dashed">
                                <p class="mb-0"><strong>Working Days</strong></p>
                                <p class="mb-0"><strong>Working Hours</strong></p>
                            </li>
                            <li class="d-flex justify-content-between ">
                                <p class="mb-0">Monday - Friday</p>
                                <p class="mb-0">4:30 - 11 PM</p>
                            </li>
                            <li class="d-flex justify-content-between ">
                                <p class="mb-0">Saturday</p>
                                <p class="mb-0">4 - 11 PM</p>
                            </li>
                            <li class="d-flex justify-content-between ">
                                <p class="mb-0">Sunday</p>
                                <p class="mb-0">4 - 11 PM</p>
                            </li>
                        </ul>
                    </div>
                    <div class="box mb-20 mb-lg-35">
                        <h2 class="h4 mb-10">Address</h2>
                        <p class="mb-3 contact-info"><i class="fal fa-map-marker-alt text-md text-theme mb-10"></i>302
                            Edge Ln, Droylsden, Manchester M43 6JH, <br>United Kingdom</p>
                    </div>
                    <div class="mb-0">
                        <h2 class="h4 mb-0">Customer Support</h2>
                        <a href="tel:01613708094" style="color:#FFD714" class=" text-bold mb-0 text-theme"><h4 class="phone">0161 370 8094</h4></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map-layout1" id="google-map"></div>
    </div>
</section>





@endsection
@section('scripts')

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
@endsection