@extends('frontend.layouts.master')

@section('styles')

<style>
    body {
        background-color: #151515;

    }

    .extra-items {
        padding-left: 15px;
    }

    .extra-items li {
        padding: 0 !important;
        margin-bottom: 0px !important;
        border-bottom: none !important;
    }

    .check-out {
        padding: 100px 0;
    }

    .check-out h3,
    .check-out h4 {
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: capitalize;
        position: relative;
    }

    .check-out h4 {
        margin-bottom: 30px;
    }

    .check-out h4::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 50px;
        border-bottom: 1px solid #FFD715;
    }

    .check-out-form {
        background: #000;
        padding: 40px 30px;

    }

    .check-out-form .form-group label {
        margin-bottom: 3px;
        color: #fefefe !important;
        opacity: .8;
    }

    .check-out-form .form-group {
        margin-bottom: 15px;
    }

    .check-out-form input:focus,
    .check-out-form input {
        background: #151515;
        border: none !important;
        outline: none;
        color: #fefefe;
        height: 50px;
        padding: 15px;
    }

    .checkOut-btn {
        margin-top: 15px;
    }

    .checkOut-btn button {
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

    .checkOut-btn button:hover {
        color: #FFD715;
        background-color: transparent;
    }

    .padd {
        padding: 0;
    }

    @media (max-width: 991px) {
        .padd {
            padding: 15px;
        }

    }

    .cartItems {
        background: #000;
        padding: 10px 15px;
        padding-top: 40px;
        position: sticky;
        top: 100px;
    }

    .cartItems li {
        margin-bottom: 15px;
        width: 100%;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        padding: 5px 10px;
    }

    .cartItems h5,
    .cartItems li h5 {
        color: #fefefe;
        font-family: "Poppins", sans-serif;

    }

    .cartItems li img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 6px;
        margin-right: 10px;
    }

    .cartItems li h5 {
        margin: 0;
        font-size: 16px;
        font-weight: 500;
        font-family: "Poppins", sans-serif;

    }

    .cartItems h4 {
        font-size: 18px;
        margin-bottom: 0;
    }

    .cartItems span,
    .cartItems p {
        color: #fefefe;
        text-align: right;
    }

    

    @media (max-width: 767px) {
        .check-out-form {
            padding: 30px 15px;

        }

        .check-out-form .form-group {
            margin-bottom: 10px;
        }

        .check-out-form .form-group label {
            font-size: 14px;
        }

        .check-out-form input:focus,
        .check-out-form input {
            height: 40px;
            padding: 10px;
        }

    }

    .add-extra {
        margin-top: 20px;
        display: grid;
    }

    .add-extra a {
        font-size: 12px;
        color: #FFD715;
        line-height: 1;
    }

    .add-extra span {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
        display: block;
        line-height: 1.6;
        font-weight: 300;
    }

    @media (max-width: 575px) {
        .check-carts {
            padding: 10px 5px;
        }

        .cartItems li {
            padding: 5px 5px;
        }

        .cartItems li img {
            width: 30px;
            height: 30px;
            border-radius: 5px;
        }

        .cartItems li h5 {
            font-size: 13px;
        }

        .cartItems li p {
            font-size: 12px;
        }
    }
</style>


@endsection

@section('content')


<section class="check-out">
    <div class="container">
        <h3>Shipping Info</h3>



        <div class="row">

            <div class="col-lg-5 padd">

                <div class="cartItems check-carts ">
                    @php
                        $cart = session()->get('cart', []);
                        $total = 0;
                        $items = 0;
                        foreach ($cart as $c) {
                            if ($c['item_id']) {
                                $total += $c['total'];

                                $items++;
                            }
                        }
                    @endphp
                    @if(count($cart) > 0)
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h4>Cart</h4>

                                        <span> <i class="fas fa-shopping-cart"></i> {{$items}}</span>

                                    </div>


                                    <ul class="p-0">
                                        @foreach($cart as $c)
                                                            @php        $item = \App\Models\Item::findOrFail($c['item_id']); @endphp
                                                            <li class="d-flex align-items-start justify-content-between cart_item_li_{{$c['item_id']}}">
                                                                <div class="cart-side-img d-flex ">
                                                                    <img src="{{asset('item_images')}}/{{$item->image}}" alt="Cart Image" width="50" />
                                                                    <div class="">
                                                                        <h5 class="mr-2 ">{{$c['title']}}</h5>

                                                                        <div class="add-extra mt-2 pl-3">
                                                                            <a href="#" class="mb-1">Extras</a>
                                                                            <ul class="extra-items">
                                                                               
                                                                               
                                                                            

                                                                            @php 
                                                                                                                                                                                                                                                                   if (isset($c['manual_extras'])) {
                                                                                foreach ($c['manual_extras'] as $extra) {

                                                                                    $extra = \App\Models\ItemExtraDetail::findOrFail($extra['extra_detail_id']);
                                                                             @endphp
                                                                             <li>
                                                                                    
                                                                                
                                                                            @if($c['quantity'] == 1)
                                                                            
                                                                                <span class="extra-item text-left">{{$extra->title}} (+ &pound;{{$extra->price * $c['quantity']}})</span>
                                                                            @else
                                                                                <span class="extra-item text-left">{{$extra->title}} x {{$c['quantity']}} (+
                                                                                    &pound;{{$extra->price * $c['quantity']}})</span>
                                                                            @endif
                                                                            </li>

                                                                            @php


                                                                                    }
                                                                                }
                                                                             @endphp
                                                                            @php 
                                                                                                                                                                                                                                                    if (isset($c['category_extras'])) {
                                                                                foreach ($c['category_extras'] as $extra) {

                                                                                    $extra = \App\Models\Item::findOrFail($extra['extra_detail_id']);
                                                                             @endphp
                                                                            <li>
                                                                            @if($c['quantity'] == 1)
                                                                                <span class="extra-item text-left">{{$extra->title}} (+ &pound;{{$extra->price * $c['quantity']}})</span>
                                                                            @else
                                                                                <span class="extra-item text-left">{{$extra->title}} x {{$c['quantity']}} (+
                                                                                    &pound;{{$extra->price * $c['quantity']}})</span>
                                                                            @endif
                                                                            </li>

                                                                            @php


                                                                                    }
                                                                                }
                                                                             @endphp
                                                                             </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">

                                                                    <p class="text-right m-0 mr-sm-4">&pound;{{$c['price']}}</p>


                                                                </div>
                                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="total d-flex align-items-center justify-content-between px-3">
                                        <h5>Total</h5>
                                        <p><strong class="cart_total">&pound;{{$total}}</strong></p>
                                    </div>
                    @endif

                </div>
            </div>

            <div class="col-lg-7 ">
                <form class="check-out-form" action="{{route('payment')}}" method="post">
                    @csrf
                    <div class="row px-0">

                        <div class="col-sm-12">
                            <h4>Billing</h4>

                            @auth
                                <div class="form-group">
                                    <label for="">Full Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name"
                                        value="{{ Auth::user()->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        value="{{ Auth::user()->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Phone:</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone"
                                        value="{{ Auth::user()->phone }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Address:</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address"
                                        value="{{ Auth::user()->address }}">
                                </div>

                                <div class="form-group">
                                    <label for="">City:</label>
                                    <input type="text" class="form-control" name="city" placeholder="City"
                                        value="{{ Auth::user()->city }}">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">State:</label>
                                            <input type="text" class="form-control" name="state" placeholder="State"
                                                value="{{ Auth::user()->state }}">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">ZIP:</label>
                                            <input type="text" class="form-control" name="zip" placeholder="ZIP Code"
                                                value="{{ Auth::user()->zip }}">
                                        </div>
                                    </div>
                                </div>
                            @endauth

                            @guest
                                <div class="form-group">
                                    <label for="">Full Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="">Phone:</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                </div>

                                <div class="form-group">
                                    <label for="">Address:</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>

                                <div class="form-group">
                                    <label for="">City:</label>
                                    <input type="text" class="form-control" name="city" placeholder="City">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">State:</label>
                                            <input type="text" class="form-control" name="state" placeholder="State">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">ZIP:</label>
                                            <input type="text" class="form-control" name="zip" placeholder="ZIP Code">
                                        </div>
                                    </div>
                                </div>
                            @endguest
                        </div>

                        {{--
                        <div class="col-sm-6 mt-4 mt-sm-0">
                            <h4>Payments</h4>


                            <div class="form-group">
                                <label for="">Card Holder Name:</label>
                                <input type="text" class="form-control" placeholder="Card Name">
                            </div>

                            <div class="form-group">
                                <label for="">Credit Card Number:</label>
                                <input type="text" class="form-control" placeholder="Card Name">
                            </div>

                            <div class="form-group">
                                <label for="">Exp Month:</label>
                                <input type="text" class="form-control" placeholder="Expire Month">
                            </div>

                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Exp Year:</label>
                                        <input type="text" class="form-control" placeholder="Expire Year">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">CVV:</label>
                                        <input type="text" class="form-control" placeholder="CVV">
                                    </div>
                                </div>

                            </div>

                        </div>
                        --}}



                    </div>


                    <div class="checkOut-btn">
                        <button type="submit">Continue To Payment</button>
                    </div>

                </form>

            </div>

        </div>



    </div>
</section>




@endsection
@section('scripts')

<script>

</script>
@endsection