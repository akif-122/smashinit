@extends('frontend.layouts.master')

@section('styles')

<style>
    body {
        background-color: #E0E0E0;
        font-family: "Poppins", sans-serif;

    }

    .cart-section {
        padding: 50px 0;
    }

    .cart-section .cart-wrapper {
        background-color: #000;
        padding: 30px 20px;
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

    /* CHECK OUT - SIDE */
    .checkout-side .location {
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        padding-bottom: 20px;

    }

    .checkout-side .location h6 {
        color: #FFD715;
        font-size: 14px;
    }

    .checkout-side .location p {
        color: #FFD715;
        margin: 5px 0;
        font-size: 13px;
    }

    .checkout-side .location p i {
        color: #fefefe;
        margin-right: 5px;
        font-size: 14px;
    }

    .check-out-total {
        padding: 20px 0;
    }

    .check-out-total ul {
        margin-bottom: 0;

    }

    .check-out-total ul li {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .check-out-total ul li p {
        font-size: 14px;
        color: #FFD715;
        margin: 0;
    }

    .check-out-total span {
        font-size: 11px;
        color: #FFD715;
    }

    /* CHECK OUT - SIDE */

    /* EMTY CARD */

    .empty-cart h3 {
        display: inline-block;
        border-bottom: 1px solid #FFD715;
        margin-bottom: 20px;
    }

    .empty-cart i {
        font-size: 60px;
        color: #fefefe;
    }

    .empty-cart h2 {
        font-size: 28px;
        color: #fefefe;
        margin: 20px 0;

    }

    .empty-cart a {
        color: #000;
        background-color: #FFD715;
        border: 1px solid #FFD715;
        padding: 10px 15px;
        border-radius: 7px;
        text-transform: capitalize;
        display: inline-block;
        font-weight: 500;
        transition: .5s ease;
    }

    .empty-cart a:hover {
        color: #FFD715;
        background-color: transparent;
    }

    /* EMTY CARD EDN */

    @media (max-width:991px) {
        .carts-item-wrap ul li .item-image {
            width: 70px;
        }

        .carts-item-wrap ul li .item-image img {
            width: 60px;
            height: 60px;
        }

        .carts-item-wrap ul li h3 {
            font-size: 18px;

        }


        .item-qty-btns input {
            width: 40px;
            height: 30px;

        }


        .checkout-side {
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            padding-top: 20px;
        }

    }



    @media (max-width:767px) {
        .carts-item-wrap ul li .item-image {
            width: 60px;
        }

        .carts-item-wrap ul li .item-image img {
            width: 60px;
            height: 60px;
        }







        .item-price h5 {
            font-size: 15px;
        }
    }

    @media (max-width:575px) {

        .cart-section .cart-wrapper .cart-header h4 {
            font-size: 20px;

        }

        .carts-item-wrap ul li .item-image {
            width: 50px;
        }

        .carts-item-wrap ul li .item-image img {
            width: 50px;
            height: 50px;
        }

        .carts-item-wrap ul li h3 {
            font-size: 13px;

        }






        .item-price h5 {
            font-size: 15px;
        }
    }
</style>

@endsection

@section('content')


<div class="cart-section">
    <div class="container px-1">
        <div class="cart-wrapper">

            <div class=" cart-header">
                <h4>Your basket</h4>

                <!-- <a href="{{route('clear-cart')}}"><button class="clear-cart-btn"><i class="fas fa-trash-alt"></i> Clear
                        Cart</button></a> -->
            </div>
            <div class="row">
                @php
                    $cart = session()->get('cart', []);
                    
                    $total = 0;
                    $items = 0;
                @endphp
                @if(count($cart) > 0)
                    <div class="col-lg-7 mr-auto mb-5">
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
                                                    @if($c['quantity'] == 1)
                                                    <h3>{{$c['title']}}</h3>
                                                    @else
                                                    <h3>{{$c['title']}} x {{$c['quantity']}}</h3>
                                                    @endif
                                                </div>

                                                <div class="item-price">
                                                    <h5 id="item_total_{{$c['item_id']}}">&pound;{{$c['price'] * $c['quantity']}}</h5>
                                                </div>

                                            </div>
                                            <div class="add-extra">
                                                <a href="#">Extras</a>
                                                
                                             @php 
                                             
                                             if(isset($c['manual_extras'])){
                                               foreach($c['manual_extras'] as $extra)
                                               {
                                                 
                                                  $extra = \App\Models\ItemExtraDetail::findOrFail($extra['extra_detail_id']);
                                             @endphp
                                             
                                              @if($c['quantity'] == 1)
                                                   <span>{{$extra->title}} (+ £{{$extra->price * $c['quantity']}})</span>
                                                    @else
                                                    <span>{{$extra->title}} x {{$c['quantity']}}  (+ £{{$extra->price * $c['quantity']}})</span>
                                                    @endif
                                             
                                             
                                             @php
                                            
                                               
                                               }
                                               }
                                             @endphp
                                              @php 
                                                if(isset($c['category_extras'])){
                                               foreach($c['category_extras'] as $extra)
                                               {
                                                
                                                  $extra = \App\Models\Item::findOrFail($extra['extra_detail_id']);
                                             @endphp
                                             
                                              @if($c['quantity'] == 1)
                                                   <span>{{$extra->title}} (+ £{{$extra->price * $c['quantity']}})</span>
                                                    @else
                                                    <span>{{$extra->title}} x {{$c['quantity']}}  (+ £{{$extra->price * $c['quantity']}})</span>
                                                    @endif
                                             
                                             
                                             @php
                                            
                                               
                                               }
                                               }
                                             @endphp
                                            
                                            </div>     
                                           <!-- <div class="add-extra">
                                                <a href="#">Add Drink</a>
                                                <span>Coca Cola (+ £2.00)</span>
                                                <span>Fanta Orange (+ £2.00)</span>
                                            </div> -->

                                            <div class="d-flex justify-content-between w-100">
                                                <div class="item-qty-btns ">
                                                    <button class="quantity-minus qut-btn" type="button"
                                                        onclick="decrement_quantity({{$c['item_id']}})"><i
                                                            class="fas fa-minus"></i></button>
                                                    <input type="text" value="{{$c['quantity']}}" class="qty-input" readonly>
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

                            <button class="m-btn">Add More Item</button>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-side">
                            <div class="location">

                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="my-0 text-uppercase">HOW TO GET IT</h6>
                                    <h6 class="my-0">Edit</h6>
                                </div>

                                <div class="mt-4 ">
                                    <p><i class="fas fa-map-marker-alt"></i> Pickup: 57 Westbourne Grove</p>
                                    <p><i class="far fa-clock"></i> Today at 11:30</p>
                                </div>
                            </div>

                            <!-- sub -->

                            <div class="check-out-total">
                                <ul class="p-0 list-unstyled">
                                    <li>
                                        <p>Subtotal</p>
                                        <p>&pound; {{$total}}</p>
                                    </li>

                                    <li>
                                        <p>Estimated taxes</p>
                                        <p>£00.50</p>
                                    </li>

                                    <li>
                                        <p>Estimated order total</p>
                                        <p>&pound; {{$total}}</p>
                                    </li>
                                </ul>
                                <span>Additional taxes and fees will be calculated at checkout</span>

                                <div class="cart-checkout-btn">
                                    <a href="{{route('checkout')}}">Checkout</a>
                                </div>

                            </div>

                        </div>
                    </div>

                @else
                    <div class="col-12 ">
                        <div class="empty-cart text-center">
                            <h3 class="no-item">Your Basket</h3><br />
                            <i class="fas fa-cart-plus"></i>
                            <h2 class="text-upppercase">What the Luck? Your basket is Empty!</h2>

                            <a href="{{route('shop')}}">continue shopping</a>

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





@endsection
@section('scripts')

<script>
    function increment_quantity(item_id) {
        $.ajax({
            url: "{{ route('item.increment.quantity') }}",
            type: 'GET',
            data: { item_id: item_id },
            success: function (response) {
                $('#item_total_' + item_id).html('&pound;' + response.item_total.toFixed(2));
                var header_total = '&pound;' + response.total.toFixed(2) + ' / ' + response.total_items + ' ' + response.item_label;
                var cart_total = '&pound;' + response.total.toFixed(2);

                $('#header_total').html(header_total);
                $('.cart_total').html(cart_total);
                 window.location.reload();
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    }
    function decrement_quantity(item_id) {
        if ($('.qty-input').val() > 1) {
            $.ajax({
                url: "{{ route('item.decrement.quantity') }}",
                type: 'GET',
                data: { item_id: item_id },
                success: function (response) {
                    $('#item_total_' + item_id).html('&pound;' + response.item_total.toFixed(2));
                    var header_total = '&pound;' + response.total.toFixed(2) + ' / ' + response.total_items + ' ' + response.item_label;
                    var cart_total = '&pound;' + response.total.toFixed(2);
                    $('#header_total').html(header_total);
                    $('.cart_total').html(cart_total);
                     window.location.reload();
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });

        }
    }

</script>
@endsection