@extends('frontend.layouts.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" />
@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-family: "Poppins", sans-serif;
    }

    body {
        background: #151515;
    }

    .thanks-section {
        margin: 100px 0px;
    }

    .thank-you-section {
        background-color: #000;
        padding: 30px 15px;
        border-radius: 10px;
        text-align: center;
    }

    .icon-box {
        width: 60px;
        height: 60px;
        margin: 40px auto;
        border-radius: 50%;
        background-color: #87FF96;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 0 0px 5px #bff8c7;

    }

    .icon-box span i {
        font-size: 32px;
        color: #019F24;
    }

    .thank-you-section h4 {
        font-size: 20px;
        color: #fefefe;
        font-family: "Poppins", sans-serif;

    }

    .thank-you-section>p {
        max-width: 500px;
        margin: 20px auto;
        color: rgba(255, 255, 255, 0.7);
    }

    .order-progress {
        max-width: 500px;
        margin: 40px auto;
        position: relative;
        z-index: 1;
    }

    .progress-bar {
        position: absolute;
        left: 0;
        top: 17%;
        width: 100%;
        height: 5px;
        background-color: #CCD1D6;
        z-index: -1;
    }

    .inner-bar {
        background-color: #019F24;
        width: var(--percentage);
        height: 100%;
    }

    .order-progress .prog-step.active span {
        background-color: #019F24;
        color: #fff;
    }

    .order-progress .prog-step {
        flex: 1;
    }

    .order-progress .prog-step span {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #CCD1D6;
        color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .order-progress .prog-step p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        margin-top: 5px;
    }

    /* receipe */

    .receipe {
        background-color: #000;
        border-radius: 10px;
        padding: 20px 15px;
    }

    .receipe h4 {
        font-size: 20px;
        color: #fefefe;
        margin-bottom: 15px;
    }

    .receipe .item-img {
        width: 40px;
        height: 40px;
        border-radius: 4px;
        overflow: hidden;
        margin-right: 10px;
    }

    .receipe .item-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .receipe .item-text h5 {
        font-size: 16px;
        color: #fefefe;
        margin-bottom: 0;
    }

    .receipe .item-text span {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
    }

    .receipe .receipe-text p {
        flex: 1;
        margin: 5px 0;
        color: rgba(255, 255, 255, 0.7);
    }

    .receipe hr {
        background-color: #CCD1D6;
    }

    .receipe button {
        font-size: 15px;
        padding: 8px 20px;
        border-radius: 5px;
        border: none;
        background-color: #FFD714;
        color: #151515;
        border: 1px solid #FFD714;
        transition: .5s ease;
    }

    .receipe button:hover {
        background-color: transparent;
        color: #FFD714;
    }

    @media (max-width: 575px) {
        .thank-you-section {
            padding: 5px 10px;
        }

        .order-progress .prog-step span {
            justify-content: center;
        }

        .order-progress .prog-step p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
            margin-top: 5px;
        }

    }
</style>

@endsection

@section('content')


<div class="thanks-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="thank-you-section">
                    <div class="icon-box">
                        <span><i class="fas fa-check"></i></span>
                    </div>
                    <h4>Thank you for Order</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis numquam, sapiente maiores
                        vel excepturi expedita, sint voluptates obcaecati dolor ab eum cum illum quasi
                        exercitationem quia sequi reprehenderit inventore! Alias.</p>


                    <div class="order-progress d-flex align-items-center justify-content-between">

                        <!-- 
                            PROGRESS BAR AND STEPS

                            if step 1 (order Received) :
                                 prog-step 1 have active class || AND  the progress-bar inner-bar should be style="--percentage: 35%";

                            if step 2 (Confirmation) :
                                 prog-step 1 and 2 both have active class || AND inner-bar should be style="--percentage: 70%;

                            if step 3 (Delivery) :
                                 prog-step 1, 2 and 3  have active class || AND inner-bar should be style="--percentage: 100%;

                            to be show the progress 


                            
                            -->


                        <div class="prog-step active">
                            <span class="mr-auto">1</span>
                            <p class="text-left">Order Received</p>
                        </div>

                        <div class="prog-step">
                            <span class="mx-auto">2</span>
                            <p>Confirmation</p>
                        </div>

                        <div class="prog-step">
                            <span class="ml-auto" style="transform: translateX(5px);">3</span>
                            <p class="text-right">Delivery</p>
                        </div>



                        <div class="progress-bar">
                            <div class="inner-bar" style="--percentage: 35%"></div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-4 px-lg-0">
                <div class="receipe">
                    <h4>Receipe</h4>
                    <div class="d-flex align-item-center mb-4">
                        <div class="item-img">
                            <img src="https://img.freepik.com/free-photo/delicious-burger-with-many-ingredients-isolated-white-background-tasty-cheeseburger-splash-sauce_90220-1266.jpg?w=740&t=st=1716272518~exp=1716273118~hmac=e7b61019e1eafd85d0bf37e34825842f6d5bc052a8f137f4dc5ba2e6c7aacc47"
                                alt="" width="40px">
                        </div>
                        <div class="item-text">
                            <h5>ORDER ID: 3532452</h5>
                            <span>Tues, May 21, 2024</span>
                        </div>
                    </div>

                    <div class="receipe-text d-flex align-content-center justify-content-between">
                        <p>Method:</p>
                        <p>Visa ----9902</p>
                    </div>

                    <div class="receipe-text d-flex align-content-center justify-content-between">
                        <p>Billed to:</p>
                        <p>Name goes here</p>
                    </div>

                    <div class="receipe-text d-flex align-content-center justify-content-between">
                        <p>Fee:</p>
                        <p>$2.00</p>
                    </div>

                    <div class="receipe-text d-flex align-content-center justify-content-between">
                        <p>Paid:</p>
                        <p>$22.00</p>
                    </div>
                    <hr />
                    <button>Download Invoice</button>

                </div>
            </div>

        </div>
    </div>
</div>




@endsection
@section('scripts')


@endsection