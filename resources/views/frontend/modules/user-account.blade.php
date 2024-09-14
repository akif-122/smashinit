@extends('frontend.layouts.master')

@section('styles')
<!-- BOOTSTRAP 4 CSS CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" />

<!-- OWL CAROUSEL CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />


<style>
    body {
        background-color: #E0E0E0;
    }

    a,
    a:hover {
        text-decoration: none;
    }

    .wrap {
        overflow: hidden;
    }

    .user-account {
        margin: 0px 0;
    }

    .user-tabs {
        border-top: 1px solid #FFD715;
    }

    .user-tabs ul {
        padding-top: 8px;
        display: flex;
        flex-direction: row;
        align-items: center;
        background: #000;
        /* padding: 10px 10px; */
        margin-bottom: 15px;

    }

    .user-tabs ul {
        border: none;
    }



    .user-tabs ul li a {
        display: block;
        padding: 10px 10px;
        transition: .5s ease;
        color: #FFD715;
        text-decoration: none;
        font-weight: 400;
        font-size: 16px;
        color: #fff;
        border-bottom: 3px solid transparent;
        white-space: nowrap;
    }

    .user-tabs ul li a.active,
    .user-tabs ul li a:hover {
        color: #FFD715;
        border-bottom: 3px solid #FFD715;
    }

    /* USER details */
    .user-details {
        border-radius: 5px;
        padding: 20px;
    }

    .user-details h3 {
        color: #000;
        font-size: 18px;
        margin-bottom: 20px;
        font-family: "Poppins", sans-serif;

    }

    .user-details .user-form label {
        font-size: 16px;
        color: #000;
        font-weight: 400;
    }

    .user-details .user-form input {
        background-color: transparent;
        font-weight: 500;
        border-radius: 0;
        height: 40px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #000;
        padding: 15px;
        box-shadow: none;
    }

    .user-details .user-form .profile-img input {
        padding: 5px 0;
    }

    .user-details .user-form button {
        all: unset;
        height: 40px;
        padding: 0px 20px;
        border-radius: 7px;
        text-align: center;
        background-color: #FFD715;
        color: #000;
        width: 170px;
        display: block;
        font-size: 17px;
        font-weight: 500;
        border: 1px solid #FFD715;
        cursor: pointer;
        transition: .5s ease;
    }

    .user-details .user-form button:hover {
        color: #FFD715;
        background-color: #000;
        border-color: #000;
    }

    /* ORDERS */
    .my-orders .order-item {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 8px 15px;
        padding-left: 10px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .my-orders .order-item .item-img {
        width: 100px;
        min-width: 100px;
        height: 100px;

    }

    .my-orders .order-item .item-img img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    .my-orders .order-item .item-text {
        
        padding-left: 15px;
    }

    .my-orders .order-item .item-price {
        width: 80px;
        text-align: right;
    }

    .my-orders .order-item .item-qty {
        width: 100px;
        text-align: right;
    }

    .my-orders .order-item h4 {
        font-size: 18px;
        font-weight: 400;
        color: #000;
        margin: 0;
    }

    .my-orders .order-item p {
        margin: 0;
        color: #000;
        font-weight: 400;
        font-size: 16px;
    }

    .extras a {
        font-size: 14px;
        color: #000;
        font-weight: 500;
    }

    .extras ul li span {
        font-size: 14px;
    }

    .box {
        box-shadow: 0 0 30px -10px grey;
        padding: 20px;
        border-radius: 10px;
        margin: 10px 0;
    }

    .no-order {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .no-order i {
        font-size: 60px;
        display: block;
    }

    .no-order h2 {
        font-size: 20px;
        margin: 15px 0;
    }

    .no-order p a {
        color: #000;
    }

    .form-check-inline input[type=checkbox]~label:before {
        border: 1px solid grey !important;
        border-radius: 2px;
    }

    .form-check-inline input[type=checkbox]~label,
    .form-check-inline input[type=checkbox]~label:before {
        color: #000;
        border: #000;
    }

    @media screen and (max-width: 991px) {
        .my-orders .order-item {
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 8px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .my-orders .order-item .item-img {
            width: 70px;
            min-width: 70px;
            height: 70px;

        }




    }

    @media screen and (max-width: 767PX) {
        .my-orders .order-item {
            padding: 5px 15px;
        }

        .my-orders .order-item .item-img {
            width: 60px;
            min-width: 60px;
            height: 60px;

        }




    }


    @media screen and (max-width: 575px) {
        .user-details {
            padding: 10px 10px;
        }

        .my-orders .order-item {
            border-radius: 5px;
            padding: 5px 5px;
        }

       

        .my-orders .order-item .item-text {
            width: 200px;
            padding-left: 5px;
        }

        .my-orders .order-item .item-price {
            width: 80px;
            text-align: right;
        }


        .my-orders .order-item h4 {
            font-size: 15px;
        }

        .my-orders .order-item p {
            font-size: 14px;
        }


        .user-tabs ul li a {
            padding: 10px 5px;
            font-size: 12px;
        }


    }


    .member .icon {
        min-width: 70px;
        max-width: 70px;
    }

    .member .icon i {
        font-size: 60px;
        color: #FFD715;
    }

    .member .member-text h2 {
        font-size: 24px;
        font-weight: 600;
        color: #FFD715;
    }

    .qr-wrapper {
        margin-left: 70px;
        border: 1px solid #cecece;
        max-width: 230px;
        border-radius: 10px;
        text-align: center;
        padding: 24px 0;
    }

    .qr-wrapper img {
        width: 126px;
        height: 126px;
    }

    .qr-wrapper h4 {
        margin-top: 10px;
        margin-bottom: 0;
        font-size: 22px;
        font-weight: 600;
    }

    .balance {
        margin: 30px 0;
    }

    .balance i {
        font-size: 70px;
        color: #FFD715;
    }

    .balance h2 {
        font-size: 24px;
        font-weight: 600;
        margin: 20px 0 10px 0;
    }

    .process-wrap {
        position: relative;
    }

    .process-wrap:after {
        content: "";
        position: absolute;
        width: 100%;
        left: 50%;
        top: 70px;
        /* transform: translateX(-50%); */
        border-bottom: 1px dashed #FFD715;
        z-index: -1;
    }

    .process-wrap:last-child:after {
        border: none;
    }

    .process-wrap .process .icon {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        border: 1px solid rgb(202, 204, 204);
        margin: 20px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #E0E0E0;
    }

    .process-wrap .process .icon i {
        font-size: 50px;
        color: #FFD715;
    }


    @media (max-width: 575px) {
        .process-wrap {
            position: relative;
            padding: 20px 0;
        }


        .process-wrap .process {
            display: flex;
            align-items: center;
        }

        .process-wrap .process p {
            margin: 0;
        }

        .process-wrap:after {
            content: "";
            position: absolute;
            height: 100%;
            left: 25px;
            top: 50%;
            /* transform: translateX(-50%); */
            border-left: 1px dashed #FFD715;
            border-bottom: 0;
            z-index: -1;
        }



        .process-wrap:last-child:after {
            border: none;
        }

        .process-wrap .process .icon {
            min-width: 50px;
            max-width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid rgb(202, 204, 204);
            margin: 0px 0;
            margin-right: 16px;
        }

        .process-wrap .process .icon i {
            font-size: 20px;
        }
    }

    table td {
        padding: 5px;
        white-space: nowrap;
        font-size: 15px;
    }

    .date {
        width: 200px;
    }
</style>
@endsection

@section('content')
@if(session('status'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('status') }}',
        });
    </script>
@endif

@if($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            html: `
                                                                                                            @foreach($errors->all() as $error)
                                                                                                                <div>{{ $error }}</div>
                                                                                                            @endforeach
                                                                                                    `,
        });
    </script>
@endif
<div class="wrap">
    <div class="user-tabs">
        <ul class="nav nav-tabs px-sm-4 flex-nowrap" style="overflow: auto;">
            <li>
                <a data-toggle="tab" href="#userDetail" class="active">
                    My Profile
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#myOrder">
                    My Orders
                </a>
            </li>

            <li>
                <a data-toggle="tab" href="#rewards">
                    Rewards
                </a>
            </li>


            <li>
                <a data-toggle="tab" href="#changePassword">
                    Change Password
                </a>
            </li>


            <li>
                <a href="{{route('user-logout')}}">
                    Logout
                </a>
            </li>
        </ul>
    </div>



    <section class="user-account">
        <div class="container-lg px-1 px-sm-3 ">
            <div class="row">


                <div class="col-lg-12 mx-auto">
                    <div class="user-details px-0">
                        <div class="tab-content">
                            <!-- USER DETAIL TABS -->
                            <div id="userDetail" class="tab-pane  ">

                                <div class="box">
                                    <h3>Account Details</h3>

                                    <div class=" mb-4">
                                        <p class="my-1">Name:</p>
                                        <h5 class="my-1">{{old('name', Auth::user()->name)}}</h5>
                                    </div>

                                    <div class=" mb-4">
                                        <p class="my-1">Email:</p>
                                        <h5 class="my-1">{{old('email', Auth::user()->email)}}</h5>
                                    </div>

                                </div>

                                <div class="box">
                                    <h3>Marketing</h3>

                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Send Me Promotion and Offers
                                        </label>
                                    </div>

                                </div>

                                <div class="box">
                                    <h3>Delete Your Account</h3>

                                    <p>To permenent Delete Your account, press the button below.</p>

                                    <a href="#" class="btn btn-danger">Delete</a>


                                </div>


                                <div class="box">
                                    <h3>Account Details</h3>

                                    <div class="user-form">
                                        <form action="{{route('user-profile-update')}}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-sm-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Name:</label>
                                                        <input type="text" placeholder="Name" class="form-control"
                                                            name="name" value="{{old('name', Auth::user()->name)}}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Email:</label>
                                                        <input type="email" placeholder="Email" class="form-control"
                                                            name="email" value="{{old('email', Auth::user()->email)}}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Phone:</label>
                                                        <input type="text" placeholder="Phone" class="form-control"
                                                            name="phone" value="{{old('phone', Auth::user()->phone)}}">
                                                    </div>
                                                </div>


                                                <div class="col-sm-6 mb-3">
                                                    <div class="profile-img">
                                                        <label for="">Profile Image:</label>
                                                        <input type="file" class="form-control-file" name="image">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Address:</label>
                                                        <input type="text" placeholder="Address" class="form-control"
                                                            name="address"
                                                            value="{{old('address', Auth::user()->address)}}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="user-form-btn">
                                                <button>Update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>

                            <!-- ORDERS TABS -->
                            <div id="myOrder" class="tab-pane fade box">


                                <div class="my-orders">
                                    @php $orders = \App\Models\Order::where('user_id',Auth::user()->id)->get(); @endphp
                                    @if(isset($orders))
                                    
                                    
                                    <h3>My Orders</h3>
                                    @foreach($orders as $order)
                                    
                                    @foreach($order->order_items as $itm)
                                    @php  $item = \App\Models\Item::findOrFail($itm->item_id); @endphp
                                    @if($item)
                                    <!-- ORDER ITEM -->
                                    <div class="order-item flex-column justify-content-between flex-sm-row align-items-start align-items-sm-center">
                                        <div class="d-flex ">
                                            <div class="item-img">
                                                <img src="{{asset('item_images')}}/{{$item->image}}"
                                                    alt="">
                                            </div>
                                            <div class="item-text">
                                                <h4>{{$item->title}}</h4>
                                                
                                                @if($itm->order_item_extras)
                                                <div class="mt-1 extras ">
                                                    <a href="#" class="">Extras</a>
                                                    
                                                    <ul class="extra-items">
                                                    
                                                        @foreach($itm->order_item_extras as $extr)
                                                        
                                                        @php $extra = \App\Models\ItemExtraDetail::where('id',$extr->extra_id)->first();  @endphp
                                                        @if($extra)
                                                        <li>
                                                            <span class="extra-item text-left">{{$extra->title}} @if($extr->price > 0) &pound;{{$extr->price}} @endif</span>
                                                        </li>
                                                        @endif
                                                        
                                                        @endforeach
                                                    </ul>
                                                    
                                                </div>
                                                @endif
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex ml-auto mx-sm-0 ml-sm-auto">

                                            <div class="item-qty mx-auto">
                                                <p>QTY: {{$itm->quantity}}</p>
                                            </div>
                                            <div class="item-price ml-auto">
                                                <p>&pound;: {{$itm->total}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach
                                    @else
                                    
                                    <div class="no-order">
                                        <i class="fas fa-lock"></i>
                                        <h2>No Order To Display</h2>
                                        <p>Look Like you havent order yet, <a href="/shop">Start Ordering Now!</a></p>
                                    </div>

                                    @endif

                                 


                                </div>



                            </div>

                            <div id="rewards" class="tab-pane fade show active rewards">
                                <div class="box">
                                    <h3>Membership</h3>

                                    <div class="d-flex member">
                                        <div class="icon">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <div class="member-text">
                                            <h2>Earn loyalty points in store</h2>
                                            <p>Enter your member code at our kiosks to collect and redeem loyalty
                                                points.</p>
                                        </div>
                                    </div>

                                    <div class="qr-wrapper">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL0ORK5AQ7Y8QHA2JU6LJeK9MQ42RBy7JYiwxnOBY-rnO9AigisyDM7Zy4DnqpTXh1fPU&usqp=CAU"
                                            alt="">

                                        <h4>245370424451</h4>
                                    </div>

                                </div>

                                <div class="box">
                                    <h3>Points Balance</h3>


                                    <div class="text-center balance">
                                        <i class="fas fa-gem"></i>
                                        <h2>50 Points</h2>
                                        <p>Keep going Akif! Earn 50 more Points to get your next reward!</p>
                                    </div>
                                </div>


                                <div class="box">
                                    <h3>How it Works</h3>

                                    <div class="row text-center">

                                        <div class="col-sm-4 process-wrap">
                                            <div class="process">
                                                <div class="icon">
                                                    <i class="fas fa-credit-card"></i>
                                                </div>
                                                <p>Earn 1 Point for every £1 you spend</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 process-wrap">
                                            <div class="process">
                                                <div class="icon">
                                                    <i class="fas fa-gem"></i>
                                                </div>
                                                <p>Once you've earned 100 Points, you'll earn a reward</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 process-wrap">
                                            <div class="process">
                                                <div class="icon">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </div>
                                                <p>Apply your Points at checkout to get a discount</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="box px-1 px-sm-3">
                                    <h3>Points History</h3>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>

                                                <tr>
                                                    <th class="date">Date</th>
                                                    <th>Activity</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>6 Jun 2024 at 8:53 </td>
                                                    <td>Earned 50 Points</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>



                            </div>


                            <div id="changePassword" class="tab-pane fade">
                                <h3>Change Password</h3>

                                <div class="user-form">
                                    <form action="{{route('user-password-update')}}" method="post">
                                        @csrf
                                        <div class="col-md-6 px-0">
                                            <div class="row">


                                                <div class="col-sm-12 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Old Password:</label>
                                                        <input type="password" name="old_password"
                                                            placeholder="Enter your old Password" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 mb-3">
                                                    <div class="form-group">
                                                        <label for="">New Password:</label>
                                                        <input type="password" name="new_password"
                                                            placeholder="Enter new Password" class="form-control">
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="user-form-btn">
                                            <button>Update Password</button>
                                        </div>

                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>



            </div>
        </div>
    </section>


</div>
@endsection
@section('scripts')
<!-- JQUERY CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- OWL CAROUSEL JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $('.tabs-slide').owlCarousel({
        loop: false,
        margin: 5,
        nav: false,
        dots: false,
        autoWidth: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 8
            }
        }
    })

</script>
@endsection