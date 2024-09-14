@extends('frontend.layouts.master')

@section('styles')

<style>
    body{
        background-color: #151515;
    }
    .terms-section{
        padding: 100px 10px;
    }

    .terms-section h1{
        color: #fefefe;
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        margin-bottom: 30px;

    }
    .terms-section h3{
        color: #fefefe;
        font-family: "Poppins", sans-serif;
        font-size: 24px;
    }
    .terms-section p{
        color: #fff;
        opacity: 0.9;
    }
</style>

@endsection

@section('content')


<section class="terms-section">
    <div class="container">
        <h1 class="text-center">Terms & Conditions</h1>
        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-10 mx-auto">
                <h3>Login with 3rd Party Accounts, e.g. Facebook</h3>

                <p class="text-justify">By logging in to our website using a third party account, you consent to us storing on our server(s) certain information obtained from your third party account, e.g. name, email address and profile image. It is not possible for us to capture or store any data not made available to us by the third party account provider, and even for the data that is made available to us, we undertake to store only what is needed for us to provide you with our services in their full capacity.</p>
            </div>
        </div>
    </div>
</section>




@endsection
@section('scripts')

<script>
 
</script>
@endsection
