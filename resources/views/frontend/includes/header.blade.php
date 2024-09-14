<style>
    #main-header {
        position: sticky;
        top: 0;
        background-color: #000 !important;
        height: 100px;
        display: flex;
        align-items: center;

    }

    #header-menu {
        padding: 10px 15px;
    }

    #header-menu .header-logo img {
        width: 135px;
    }

    #header-menu ul li a {
        color: #fff;
        transition: .5s ease;
        padding: 0;
        position: relative;
        font-weight: 600;
    }

    #header-menu ul li a:after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -3px;
        transform: translateX(-50%);
        width: 0%;
        height: 3px;
        background-color: #FFD715;
        border-radius: 5px;
        transition: .5s ease;
    }

    #header-menu ul li a.m-btn:after {
        background-color: transparent;
    }

    #header-menu ul li a.active:after,
    #header-menu ul li a:hover:after {
        width: 100%;
    }

    #header-menu ul li a.active {
        color: #FFD715;
    }


    #header-menu .call-us-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dark-style a:hover,
    #header-menu .call-us-btn a:hover{
        color: #FFD715 ;
    }
    #header-menu .call-us-btn:hover {
        border-color: #FFD715;
        background-color: #FFD715;
        color: #151515;
    }

    #header-menu .m-btn {
        border: 1px solid #FFD715;
        border-radius: 7px;
        padding: 8px 18px;
        font-weight: 600;
        color: #151515;
        background-color: #FFD715;

    }

    #header-menu .m-btn:hover {
        color: #FFD715;
        background-color: transparent;
    }

    #header-menu .header-btn a {
        margin: 0 5px;
        white-space: nowrap;
    }

    #header-menu .cart-btn {
        all: unset;
        border: 1px solid #FFD715;
        border-radius: 7px;
        padding: 8px 18px;
        color: #151515;
        font-weight: 600;
        background-color: #FFD715;
        cursor: pointer;
        transition: 0.5s ease;
        font-family: "Roboto" sans-serif;

    }

    #header-menu .cart-btn span {
        color: #151515;
        transition: .5s ease;
    }

    #header-menu .cart-btn i {
        color: #151515;
        transition: .5s ease;
        margin-right: 5px;
    }

    #header-menu .cart-btn:hover span,
    #header-menu .cart-btn:hover {
        color: #FFD715 !important;
        background-color: transparent;
    }

    #header-menu .cart-btn:hover i {
        color: #FFD715;
    }

    #header-menu .user-icon i {
        font-size: 12px;

    }

    #header-menu .user-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px solid #fff;
        margin-right: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #header-menu .user-icon:hover {
        color: #151515;
        background-color: #FFD715;
        border-color: #FFD715;
    }

    #header-menu .menu-wrap {
        /* min-width: 600px; */
        margin-right: auto ;
        padding-left: 80px;
    }

    .right-btn-wrap {
        /* width: 500px; */
    }

    .tel-no {
        color: #FFD715 !important;
    }

    @media (max-width:1199px) {
        #header-menu .header-logo img {
            width: 100px;
        }

        #header-menu ul li {
            margin: 0px 5px;

        }

    }

    @media (max-width:991px) {
        #main-header {
            height: 70px;

        }

        #header-menu .menu-wrap {
            width: 100%;
            padding-left: 0;
        }

        #menu-popup-handle {
            all: unset;
            font-size: 20px;
            color: #fff;
            margin-right: 10px;
            cursor: pointer;
            transition: .5s ease;
        }

        #menu-popup-handle:hover {
            color: #FFD715;
        }

        .menu-wrap {
            position: relative;
        }

        .menu-wrap .main-menu.show {
            pointer-events: all;
            opacity: 1;
        }

        .menu-wrap .main-menu {
            display: block !important;
            pointer-events: none;
            opacity: 0;
            position: absolute;
            right: 30px;
            top: 50px;
            border: 1px solid #FFD715;
            width: 200px;
            border-radius: 10px;
            background-color: #151515;
            overflow: hidden;
            transition: .5s ease;
        }

        .menu-wrap .main-menu ul {
            display: grid;
            text-align: left;
        }

        .menu-wrap .main-menu ul li {
            margin: 0;
        }

        .menu-wrap .main-menu ul li a {
            display: block;
            padding: 8px 15px !important;
            font-size: 16px;
            transition: .5s ease;
        }

        .menu-wrap .main-menu ul li a:hover {
            color: #151515 !important;
            background-color: #FFD715;
        }
    }

    /* STICKY HEADER 
        .sticky-header-wrap{
            background-color: #151515;
        }
        .sticky-header-wrap .logo img{
            width: 80px;
        }
        .sticky-header-wrap ul li a{
            text-shadow: none !important;
            color: #fff;
        } */

    .cart-section {
        padding: 50px 20px;
    }

    .cart-section .cart-wrapper {
        background-color: #000;
        padding: 20px 20px;
        padding-top: 0;
        border-radius: 8px;
    }


    .cart-section .cart-wrapper .no-item {
        color: #E0E0E0 !important;
    }

    .cart-section .cart-wrapper h6 {
        color: #FFD715 !important;
        font-size: 14px;
    }

    .cart-section .cart-wrapper .cart-header h4 {
        font-size: 28px;
        color: #fefefe;
        font-family: "Poppins", sans-serif;
        margin-bottom: 30px;
        text-transform: capitalize;
        font-weight: 600;
        color: #FFD715;

    }

    .item-qty-btns {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
    }

    .item-qty-btns input {
        all: unset;
        width: 40px;
        height: 40px;
        text-align: center;
        border: 1px solid transparent;
        margin: 0;
        color: #FFD715;

    }

    .item-qty-btns button {
        all: unset;
        margin: 0;
        text-align: center;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        font-size: 12px;
        color: #151515;
        background-color: #FFD715;
        border: 1px solid #FFD715;
        cursor: pointer;
        transition: .5s ease !important;
    }

    .item-qty-btns button:hover {
        color: #FFD715;
        background-color: #000;
        border: 1px solid #000;
    }

    .cart-checkout-btn {
        margin-top: 20px;
    }

    .cart-checkout-btn a,
    .cart-section .cart-wrapper .cart-header button {
        all: unset;
        width: 100%;
        padding: 5px 15px;
        box-sizing: border-box;
        font-size: 14px;
        font-weight: 600;
        text-align: center;
        color: #151515;
        background: #FFD715;
        border: 1px solid #FFD715;
        cursor: pointer;
        display: block;
        transition: .5s ease;
        border-radius: 60px;
    }

    .cart-checkout-btn a:hover,
    .cart-section .cart-wrapper .cart-header button:hover {
        color: #FFD715;
        background-color: transparent;
    }

    /* .cart-checkout-btn {
        text-align: right;
    } */

    /* .cart-checkout-btn a {
        font-size: 24px;
        display: inline-block;
        font-weight: 500;
        padding: 10px 25px;
        width: 150px;
        margin-left: auto;
        text-align: center;
    } */

    .carts-item-wrap {
        margin-top: 30px;

    }



    .carts-item-wrap ul li {
        display: flex;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        padding: 15px 0;
    }

    .carts-item-wrap ul li:last-child {
        border-bottom: none;
    }


    .carts-item-wrap ul li .item-data {
        width: 100%;
    }

    .carts-item-wrap ul li .item-image {
        width: 80px;
        margin-right: 20px;
    }

    .carts-item-wrap ul li .item-image img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
        background-color: #151515;
    }

    .carts-item-wrap ul li h3 {
        color: #FFD715;
        font-size: 18px;
        font-weight: 500;
        font-family: "Poppins", sans-serif !important;
        margin: 0;

    }

    .item-price {
        margin-left: 70px;
    }

    .item-price h5 {
        font-size: 18px;
        color: #FFD715;
        font-weight: 500;
        margin: 0;
        font-family: "Poppins", sans-serif;
        text-align: right;

    }

    .add-extra {
        margin-top: 20px;
        display: grid;
    }

    .add-extra a {
        font-size: 12px;
        color: #FFD715;
    }

    .add-extra span {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
        display: block;
        line-height: 1.6;
        font-weight: 300;
    }



    .remove-item {
        all: unset;
        color: #FFD715;
        transition: .5s ease;
        cursor: pointer;
    }

    .remove-item:hover {
        color: #fff;
    }

    .item-total {
        max-width: 300px;
        margin-left: auto;
    }

    .item-total h4 {
        color: #fefefe;
        font-family: "Poppins", sans-serif;

    }

    .item-total p {
        font-size: 22px;
        color: #fefefe;
        font-family: "Poppins", sans-serif;

    }

    .m-btn {
        border: 1px solid #FFD715;
        padding: 8px 18px;
        font-weight: 600;
        color: #FFD715;
        background-color: transparent;
        width: 100%;
        border-radius: 60px;
        transition: .5s ease;
    }

    .m-btn:hover {
        color: #000;
        background-color: #FFD715;

    }


    .cart-btn-wrap {
        position: relative;
    }

    .sideCard {
        background-color: #000;
        padding: 10px 20px;
        position: absolute;
        top: calc(100% + 10px);
        right: 0;
        width: 400px;
        height: 500px;
        overflow-y: auto;
        opacity: 1;
        display: none;
        z-index: 100;
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 10px;
    }

    .cart-btn-wrap:hover .sideCard {
        opacity: 1;
        display: block;
    }

    .sideCard .basket{
        color: #FFD715;
        font-size: 24px;
        font-weight: 500;
        margin-top: 10px;
    }


    
    
</style>

@php
    $total = 0;
    $items = 0;
    $cart = session()->get('cart', []);
    foreach ($cart as $c) {

        if ($c['item_id']) {
            $total += $c['total'];
            $items++;
        }
    }
@endphp

<header class="header-wrapper  header-layout2 bg-dark dark-style py-2 py-lg-0 px-xl-115 " id="main-header">



    <div class="container-fluid position-relative" id="header-menu">
        <div class="d-flex justy-content-between align-items-center">
            <div class="">
                <div class="header-logo">
                    <a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/Smash-in-it-logo.png')}}"
                            alt="Logo"></a>
                </div>
            </div>
            <div class="  menu-wrap  d-flex justy-content-between">
                <nav id="main-menu" class="main-menu menu-style1 link-inherit mx-auto text-xl-left mobile-menu-active ">
                    <ul class="p-0 text-left text-lg-center">

                        <li>
                            <a class="{{ request()->routeIs('shop') ? 'active' : '' }}" href="{{route('shop')}}">Our
                                Menu</a>

                        </li>
                        <li>
                            <a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{route('about')}}">About</a>

                        </li>
                        <!-- <li>
                            <a href="{{route('blog')}}">Blog</a>

                        </li> -->
                        <li>
                            <a class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{route('contact')}}">Contact</a>

                        </li>
                        <li>
                            <a class="{{ request()->routeIs('gallery') ? 'active' : '' }}"
                                href="{{route('gallery')}}">Gallery</a>

                        </li>

                        @auth
                            <li class="d-block d-lg-none">
                                <a class="{{ request()->routeIs('user-account') ? 'active' : '' }}"
                                    href="{{route('user-account')}}">My Account</a>
                            </li>


                        @else
                            <li class="d-block d-lg-none">
                                <a class="{{ request()->routeIs('user-login') ? 'active' : '' }}"
                                    href="{{route('user-login')}}"><i class="fas fa-user mr-1"></i> Sign in</a>
                            </li>

                        @endauth



                        <li>
                            <a href="{{route('shop')}}" class="m-btn d-none d-lg-block text-uppercase">Order Online</a>

                        </li>



                    </ul>
                </nav>
                <div class="d-flex align-items-center ml-auto">


                    @auth
                        <a href="{{route('cart')}}" class=" user-icon d-flex  d-lg-none">
                            <i class="fas fa-shopping-cart "></i>
                        </a>

                        <a href="{{route('user-login')}}" class="user-icon d-flex  d-lg-none">
                            <i class="fas fa-user"></i>
                        </a>


                    @else
                        <a href="{{route('shop')}}" class="m-btn d-block d-lg-none text-uppercase mx-3">Order Online</a>


                    @endauth





                    <button type="button" id="menu-popup-handle" class=" d-block text-theme  d-lg-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="d-none d-lg-block right-btn-wrap">
                <div class="header-right d-none d-lg-flex align-items-center justify-content-end">

                    <div class="header-btn  d-flex align-items-center ml-auto ">

                        @auth

                            <a class="{{ request()->routeIs('user-account') ? 'active' : '' }}"
                                href="{{route('user-account')}}">My Account</a>


                        @else

                            <a class="{{ request()->routeIs('user-login') ? 'active' : '' }}"
                                href="{{route('user-login')}}"><i class="fas fa-user mr-1"></i> Sign in</a>


                        @endauth


                        <!-- <a href="tel:01613708094" class="tel-no">01613708094</a>
                        <a href="tel:01613708094" class="call-us-btn"><i class="fas fa-phone-alt"></i></a> -->
                        <!-- <a href="#" class="icon-btn text-theme mr-15 searchBoxTggler"><i class="fal fa-search"></i></a> -->


                        <div class="cart-btn-wrap">

                            <a href="{{route('cart')}}" class="icon-btn text-theme  cart-btn ">
                                <!-- <span class="number bg-theme">9</span> -->
                                <i class="fas fa-shopping-cart "></i>
                                <span id="header_total">&pound;{{$total}} / {{$items}}
                                    {{ $items > 1 ? 'items' : 'item'}}</span>
                            </a>

                            <div class="sideCard cart-section">

                                <h3 class="basket">Your Basket</h3>
                                <div class="row cart-wrapper px-3">
                                    @php
                                        $cart = session()->get('cart', []);
                                        $total = 0;
                                        $items = 0;
                                    @endphp
                                    @if(count($cart) > 0)
                                        <div class="">
                                            <div class="carts-item-wrap">



                                                <ul class="p-0">

                                                    @foreach($cart as $c)
                                                        @php        $item = \App\Models\Item::findOrFail($c['item_id']); @endphp
                                                        <li class="cart_item_li_{{$c['item_id']}}">
                                                            <div class="item-image">
                                                                <img src="{{asset('item_images')}}/{{$item->image}}" alt="">
                                                            </div>
                                                            <div class=" item-data">
                                                                <div class="d-flex align-items justify-content-between w-100 ">

                                                                    <div class="item-content  mr-auto ">
                                                                        <h3>{{$c['title']}}</h3>
                                                                    </div>

                                                                    <div class="item-price">
                                                                        <h5 id="item_total_{{$c['item_id']}}">
                                                                            &pound;{{$c['price']}}</h5>
                                                                    </div>

                                                                </div>


                                                                <div class="d-flex justify-content-between w-100">
                                                                    <div class="item-qty-btns ">
                                                                        <button class="quantity-minus qut-btn" type="button"
                                                                            onclick="decrement_quantity({{$c['item_id']}})"><i
                                                                                class="fas fa-minus"></i></button>
                                                                        <input type="text" value="{{$c['quantity']}}"
                                                                            class="qty-input" readonly>
                                                                        <button class="quantity-plus qut-btn" type="button"
                                                                            onclick="increment_quantity({{$c['item_id']}})"><i
                                                                                class="fas fa-plus"></i></button>

                                                                    </div>

                                                                    <div class="align-self-end">
                                                                        <button class="remove-item"><i class="fas fa-trash-alt"
                                                                                onclick="remove_from_cart({{$c['item_id']}})"></i></button>
                                                                    </div>
                                                                </div>





                                                            </div>
                                                        </li>
                                                        @php        $total += $c['total']; @endphp
                                                    @endforeach

                                                </ul>

                                                <a href="{{route('cart')}}">
                                                    <button class="m-btn c-t-b">Continue to Basket</button>
                                                </a>


                                            </div>
                                        </div>


                                    @else
                                        <div class="col-12 ">
                                            <div class="empty-cart text-center">
                                                <h2 class="text-upppercase">Your basket is Empty!</h2>

                                                <!-- <a href="{{route('shop')}}">continue shopping</a> -->

                                            </div>

                                        </div>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
    let menuHandle = document.querySelector("#menu-popup-handle");
    let mainMenu = document.querySelector("#main-menu");

    menuHandle.addEventListener("click", () => {
        mainMenu.classList.toggle("show");
    })
</script>