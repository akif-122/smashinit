@extends('frontend.layouts.master')
@section('styles')
    <!-- OWL CAROUSEL CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <style>
        .vs-food-box-wrapper {
            background-color: #E0E0E0 !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        div {
            font-family: "Poppins", sans-serif !important;
        }

        .food-list-top h3 {
            color: #000 !important;
        }

        #foodSelectionProductDesc {
            padding-left: 0 !important;
        }

        #foodSelectionProductDesc span,
        #foodSelectionProductDesc {
            color: #212529 !important;
        }

        #foodSelectionProductDesc,
        .food-content {
            text-align: left !important;
        }

        .category-tabs li a {
            background-color: red;
        }

        /* .mask-style3 {
                background: #151515 !important;
                border: 1px solid #FFD715;
                color: #FFD715 !important;
                padding: 6px 25px;
                font-size: 15px;
                text-transform: capitalize;
                white-space: nowrap;
            }

            .mask-style3:hover {

                background: #FFD715 !important;
                border: 1px solid #FFD715;
                color: #151515 !important;
            }

            .tab-title-active {
                background-color: #FFD715 !important;
                color: #151515 !important;

            } */

        .add-to-order-btn {
            padding: 10px 35px;
            font-size: 16px;
            border-radius: 50px;
            font-weight: 700;
            background: #FFD715;
            border: none;
            color: #151515;
            border-radius: 30px;
        }

        .vs-food-box {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 30px -10px grey;
            border: none !important;
            background: #fefefe !important;
            margin-bottom: 0 !important;
        }

        .food-box-layout3 .food-content {
            padding-bottom: 0;
            text-align: left !important;
        }

        .food-menu-wrapper {
            position: relative;
        }

        .food-menu-wrapper ul li {
            padding: 0px 5px;
        }

        .food-menu-wrapper ul li a {
            background-color: transparent;
            font-size: 15px;
            color: rgba(0, 0, 0, 0.8);
            border-radius: 0;
            padding: 0;
            padding-bottom: 5px;
            text-transform: capitalize;
            color: #15151594;
            border-bottom: 2px solid transparent;

        }

        .food-menu-wrapper ul li a.active {
            color: #151515;
            border-bottom: 2px solid #FFD715;
        }

        .food-menu-wrapper .owl-nav {
            position: absolute;
            top: 43%;
            left: 0;
            transform: translateY(-70%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            pointer-events: none;
        }

        .food-menu-wrapper .owl-nav button {
            all: unset;
            pointer-events: all;
            background-color: transparent !important;
        }

        .food-menu-wrapper .owl-nav button.disabled {
            cursor: not-allowed;
        }

        .food-menu-wrapper .owl-nav button span {
            color: rgba(0, 0, 0, 0.8);
            font-size: 50px;
        }

        .food-image {
            height: 300px;
        }

        .food-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .food-box-layout3 .food-price {
            color: #151515;
            box-shadow: none;
        }

        .food-box-layout3 .food-content {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 10px;
            padding-bottom: 20px;
        }

        .food-content .food-title {
            font-size: 18px;
            height: auto !important;
            /* padding-bottom: 0px !important; */
            font-weight: 600;
            font-family: "Poppins", sans-serif;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 5px;
            padding: 5px 0;
            
        }

        .food-content .price {
            margin-top: 0 !important;
            margin-bottom: 5px;
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            color: #151515;
            background-color: #FFD715 !important;


        }

        .food-content p {
            text-align: left !important;
            color: rgb(33, 37, 41) !important;
            font-family: "Poppins", sans-serif;
            margin-top: 0 !important;
        }

        #foodSelectionProductDesc span {
            text-align: left !important;
        }

        .food-price {
            background: #FFD715 !important;
        }

        @media (max-width: 991px) {
            .vs-food-box-wrapper {
                padding-top: 10px;
            }

            .food-image {
                height: 270px;

            }

            .food-image img {
                height: 100%;
                width: 100%;
            }

        }

        @media (max-width: 757px) {
            .food-image {
                height: 250px;
            }

            .food-box-layout3 .food-price {
                right: 5px;
                font-size: 16px;
                min-width: 116px;
                padding: 0px 15px !important;
                line-height: 40px;
                height: 40px;
                z-index: 1;
                z-index: 41;
                box-shadow: none;
                border-radius: 9999px;
            }

            .food-content .food-title {
                height: auto !important;
                padding-bottom: 10px;
                font-family: "Poppins", sans-serif;

            }

            .food-content .price {
                font-family: "Poppins", sans-serif;
                margin-top: 10px;
                font-family: "Poppins", sans-serif;

            }


        }

        @media (max-width: 575px) {
            .vs-food-box {
                max-width: 380px;
                margin: auto;
            }

            .food-image {
                height: 150px;
            }

            .food-content {
                padding-left: 10px !important;
                padding-right: 10px !important;
                padding-top: 25px !important;
            }

            .food-box-layout3 .food-price {
                height: 30px;
                line-height: 30px;
                min-width: 80px;
                font-size: 13px;
                color: #151515;

            }

            .food-content .food-title {
                line-height: 1.3;
                height: auto !important;
                padding-bottom: 1px;
                font-size: 14px;
            }

            .food-content p,
            .food-content p span {
                line-height: 1.5 !important;
                margin-top: 10px;
                font-size: 12px !important;
            }

            .add-to-order-btn {
                font-size: 14px !important;
                padding: 5px 25px;
            }
        }


        /* SIDE TABS SECTION */


        #side-tabs {
            position: sticky;
            top: 100px;
            max-height: 500px;
            overflow-y: auto;
        }

        #side-tabs ul li a {
            display: block;
            padding: 8px 10px;
            padding-left: 30px;
            position: relative;
            color: rgba(0, 0, 0, 0.8);
            border-radius: 0;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            background-color: transparent;
            text-align: left;
        }



        #side-tabs ul li a.active {

            background-color: transparent;
        }

        #side-tabs ul li a.active::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 15px;
            background-color: #FFD715;
        }



        .food-list-top h3 {
            font-family: "Poppins", sans-serif;
            font-size: 18px;
            color: #fff;

        }

        /* MODAL SECTION START */
        .product-modal .modal-dialog {
            max-width: 600px;
        }

        .product-modal .modal-dialog .modal-content {
            background: #E0E0E0;
        }

        .product-modal .modal-body {
            padding: 0;
            background-color: #E0E0E0;
            position: relative;
        }

        .product-modal .modal-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .product-modal .modal-footer .modalClose {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            border: 1px solid #000;
        }

        .product-modal .modal-footer .add-to-order {
            all: unset;
            width: calc(100% - 70px);
            border-radius: 70px;
            height: 40px;
            color: #000;
            border: 1px solid #FFBE00;
            background: #FFBE00;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            transition: .5s ease;
        }

        .product-modal .modal-footer .add-to-order:hover {
            color: #FFBE00;
            background: #000;
            border-color: #000;
        }

        .product-modal .modal-body .food-content {
            padding: 15px;
        }

        .product-modal .modal-body .food-image {
            height: 400px !important;
        }

        .product-modal .modal-body .food-content .price- {
            font-size: 18px;
            color: #000;
            display: block;
            font-weight: 500;
            margin: 10px 0;
        }

        .product-modal .modal-body .food-content p {
            font-size: 14px;
        }

        .product-modal h2 {
            margin-top: 20px;
            font-size: 18px;
            color: #000;
            font-weight: 600;
        }



        .inc-dec-btns {
            display: flex;
            align-items: center;
            margin: 15px 0;
            margin-bottom: 25px;

        }

        .inc-dec-btns button {
            all: unset;
            width: 32px;
            height: 32px;
            font-size: 14px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fefefe;
            background-color: #000;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .inc-dec-btns button:hover {
            color: #FFD715;
        }

        .inc-dec-btns .qty-input {
            all: unset;
            width: 50px;
            text-align: center;
            font-size: 22px;
            font-weight: 500;
            color: #000;

        }

        @media screen and (max-width: 575px) {
            .product-modal .modal-body .food-image {
                height: 280px !important;
            }

            .food-menu-wrapper ul li a{
                font-size: 12px;
            }
            
        }

        /* STATUS CHECK */

        .food-list-top {
            padding: 5px;
        }

        .food-list-top h3 {
            font-size: 16px;
        }

        .food-list-top img {
            border-radius: 4px;
        }

        .selected {
            /* background-color: #151515 !important; */
            background-color: #FFD715 !important;
            border-radius: 5px;
            transition: .5s ease;
            color: #151515 !important;
        }

        .food-list-top.selected strong,
        .food-list-top.selected span,
        .food-list-top.selected .food-list-title a {
            color: #151515 !important;
        }

        .status-check {
            width: 40px;
            display: flex;
            align-content: center;
            justify-content: center;
            display: none;
        }

        .selected .status-check {
            display: flex;
        }

        .status-check i {
            font-size: 30px;
            color: #FFD715;
        }

        @media (max-width: 575px) {
            .food-list-top {
                height: 50px;
            }

            .food-list-top .img {
                width: 35px;
                height: 35px;
            }

            .food-list-top h3 {
                font-size: 14px;
            }

                .food-content .food-title{
                    padding-top: 0;
                    padding-bottom: 5px;
                }

        }

        /* MODAL SECTION END */
    </style>
@endsection

@section('content')
    <!--==============================
              Food Box Area
            ==============================-->
    <section class="vs-food-box-wrapper food-box-layout3 position-relative link-inherit py-60" style="background:#151515;">
        <div class="container-fluid px-0 d-block d-lg-none" style="padding: 0 !important;">
            <div class="food-menu-wrapper food-menu-style1 list-style-none text-center pb-lg-50 pb-20">
                <ul class="nav nav-tabs d-block border-0 category-tabs owl-carousel owl-theme tabs-slide px-0"
                    role="tablist ">
                    @foreach ($categories as $category)
                        <!-- mask-style3 -->
                        <li><a class="vs-btn top-tab  {{ $category->id == $active_category ? 'active' : '' }}"
                                data-tab-number="{{ $category->id }}" data-toggle="tab" href="#tab_{{ $category->id }}"
                                role="tab" aria-controls="tab_{{ $category->id }}"
                                aria-selected="true">{{ $category->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="side-tabs" id="side-tabs">
                        <ul class="nav nav-tabs d-block border-0 px-4" role="tablist ">
                            @foreach ($categories as $category)
                                <li><a class="vs-btn side-tab {{ $category->id == $active_category ? 'active' : '' }}"
                                        data-tab-number="{{ $category->id }}" data-toggle="tab"
                                        href="#tab_{{ $category->id }}" role="tab"
                                        aria-controls="tab_{{ $category->id }}"
                                        aria-selected="true">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="foodTabContent">
                        @foreach ($categories as $category)
                            <div class="tab-pane {{ $category->id == $active_category ? 'active' : '' }}"
                                id="tab_{{ $category->id }}" aria-labelledby="tab_{{ $category->id }}">
                                <div class="row justify-content-center">
                                    @foreach ($category->items as $item)
                                        <!-- MODAL -->
                                        <div class="modal fade product-modal" id={{ 'modal' . $item->id }} tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">

                                                    <div class="modal-body ">
                                                        <div class="food-image ">

                                                            <a><img src="{{ asset('item_images') }}/{{ $item->image }}"
                                                                    alt="Food Image"></a>

                                                        </div>

                                                        <div class="food-content ">
                                                            <!-- <span class="food-price">&pound;{{ $item->price }}</span> -->
                                                            @if (count($item->extras()))
                                                                <h3 class="food-title h4 mb-0"><a
                                                                        href="{{ route('item.order.page', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                                                </h3>
                                                                <!-- <h4 class="price">&pound;{{ $item->price }}</h4> -->
                                                                <span class="price-">&pound;{{ $item->price }}</span>
                                                            @else
                                                                <h3 class="food-title h4 mb-0" s><a>{{ $item->title }}</a>
                                                                </h3>
                                                                <!-- <h4 class="price">&pound;{{ $item->price }}</h4> -->
                                                                <span class="food-price">&pound;{{ $item->price }}</span>


                                                                <div class="text-center">
                                                                    <button class="add-to-order-btn">Add To Order</button>
                                                                </div>
                                                            @endif
                                                            <p class="food-text mb-0 text-xs">{!! $item->description !!}</p>

                                                            <div class="inc-dec-btns">
                                                                <button onclick="dec_qty({{ $item->id }})"><i
                                                                        class="fas fa-minus"></i></button>
                                                                <input type="text" value="1"
                                                                    id="qty-input-{{ $item->id }}" disabled
                                                                    class="qty-input">
                                                                <button onclick="inc_qty({{ $item->id }})"><i
                                                                        class="fas fa-plus"></i></button>
                                                            </div>
                                                            @foreach ($item->item_extras as $extra)
                                                                @if ($extra->is_category == 0)
                                                                    <div class="mb-5">
                                                                        <h2>{{ $extra->title }}</h2>
                                                                        @foreach ($extra->extra_details as $extra_item)
                                                                            <div class="food-list-top d-flex align-items-center justify-content-between mb-1 "
                                                                                style="cursor: pointer; background: none;"
                                                                                bis_skin_checked="1"
                                                                                id="handleCheck_{{ $extra->id }}_{{ $extra_item->id }}"
                                                                                onclick="add_this({{ $item->id }},'manual_extra',{{ $extra_item->id }},{{ $extra->id }},{{ $extra->type }})">
                                                                                <div
                                                                                    class="d-flex flex-nowrap align-items-center">
                                                                                    @if ($extra_item->image)
                                                                                        <img class="img"
                                                                                            src="{{ asset('item_detail_images') }}/{{ $extra_item->image }}"
                                                                                            alt="" width="50"
                                                                                            height="50"
                                                                                            style="display: inline-block;">
                                                                                    @endif
                                                                                    <h3 class="food-list-title h4 mb-0"
                                                                                        style="display: inline-block;margin-left:10px;"
                                                                                        id="extra_{{ $extra->id }}_{{ $extra_item->id }}">
                                                                                        {{ $extra_item->title }}</h3>
                                                                                </div>
                                                                                <div>
                                                                                    <strong class=""
                                                                                        style="line-height:50px;">&pound;{{ $extra_item->price }}</strong>
                                                                                    <span
                                                                                        class="food-rating-icon text-theme text-md"
                                                                                        id="trash_{{ $extra->id }}_{{ $extra_item->id }}"
                                                                                        style="margin-left: 10px;cursor:pointer;display:none;"
                                                                                        onclick="remove_this('manual_extra',{{ $extra_item->id }},{{ $extra->id }},{{ $extra->type }})"><i
                                                                                            class="fas fa-check-circle"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                @elseif($extra->is_category == 1)
                                                                    @php $category_items = \App\Models\Item::where('category_id',$extra->category_id)->get(); @endphp
                                                                    <div class="mb-5">
                                                                        <h2>{{ $extra->category->title }}</h2>
                                                                        @foreach ($category_items as $extra_item)
                                                                            <div class="food-list-top d-flex align-items-center justify-content-between mb-1 "
                                                                                style="cursor: pointer; background: none;"
                                                                                bis_skin_checked="1"
                                                                                id="handleCheck_{{ $extra->id }}_{{ $extra_item->id }}"
                                                                                onclick="add_this({{ $item->id }},'category_extra',{{ $extra_item->id }},{{ $extra->id }},{{ $extra->type }})">
                                                                                <div
                                                                                    class="d-flex flex-nowrap align-items-center">
                                                                                    @if ($extra_item->image)
                                                                                        <img class="img"
                                                                                            src="{{ asset('item_images') }}/{{ $extra_item->image }}"
                                                                                            alt="" width="50"
                                                                                            height="50"
                                                                                            style="display: inline-block;">
                                                                                    @endif
                                                                                    <h3 class="food-list-title h4 mb-0"
                                                                                        style="display: inline-block;margin-left:10px;"
                                                                                        id="extra_{{ $extra->id }}_{{ $extra_item->id }}"
                                                                                        bis_skin_checked="1">
                                                                                        {{ $extra_item->title }}</h3>
                                                                                </div>
                                                                                <div>
                                                                                    <strong class=""
                                                                                        style="line-height:50px;">&pound;{{ $extra_item->price }}</strong>
                                                                                    <span
                                                                                        class="food-rating-icon text-theme text-md"
                                                                                        id="trash_{{ $extra->id }}_{{ $extra_item->id }}"
                                                                                        style="margin-left: 10px;cursor:pointer;display:none;"
                                                                                        onclick="remove_this('manual_extra',{{ $extra_item->id }},{{ $extra->id }},{{ $extra->type }})"><i
                                                                                            class="fas fa-check-circle"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                @endif
                                                            @endforeach


                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="modalClose" data-dismiss="modal"><i
                                                                class="fas fa-times"></i></button>
                                                        <button type="button" class="add-to-order"
                                                            onclick="add_to_order({{ $item->id }})">Add To
                                                            Order</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-6 col-md-4 col-lg-6 col-xl-4 mb-3 mb-md-4 px-2 px-lg-3">
                                            <div class="vs-food-box h-100">
                                                <div class="food-image image-scale-hover">
                                                    @if (count($item->extras()))
                                                        <a data-toggle="modal" data-target={{ '#modal' . $item->id }}
                                                            style="cursor: pointer "><img
                                                                src="{{ asset('item_images') }}/{{ $item->image }}"
                                                                alt="Food Image"></a>
                                                    @else
                                                        <a><img src="
                                                    {{ asset('item_images') }}/{{ $item->image }}"
                                                                alt="Food Image"></a>
                                                    @endif
                                                </div>
                                                <div class="food-content">
                                                    <!-- <span class="food-price">&pound;{{ $item->price }}</span> -->
                                                    @if (count($item->extras()))
                                                        <h3 class="food-title h4 mb-0" style="cursor: pointer;"
                                                            data-toggle="modal" data-target={{ '#modal' . $item->id }}>
                                                            {{ $item->title }}
                                                        </h3>
                                                        <!-- <h4 class="price">&pound;{{ $item->price }}</h4> -->
                                                        <span class="food-price">&pound;{{ $item->price }}</span>
                                                    @else
                                                        <h3 class="food-title h4 mb-0" s><a>{{ $item->title }}</a>
                                                        </h3>
                                                        <!-- <h4 class="price">&pound;{{ $item->price }}</h4> -->
                                                        <span class="food-price">&pound;{{ $item->price }}</span>


                                                        <div class="text-center">
                                                            <button class="add-to-order-btn">Add To Order</button>
                                                        </div>
                                                    @endif
                                                    <p class="food-text mb-0 text-xs">
                                                        {{ Str::limit(strip_tags($item->description), 70) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>


        </div>
    </section>
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


        $('.top-tab').click(function() {
            $('.tab-pane').removeClass('active');
            $('.top-tab').removeClass('active');
            $(this).addClass('active');
            var tabNumber = $(this).data('tab-number');
            console.log(tabNumber);
            $('#tab_' + tabNumber).addClass('active');


        });


        function add_this(item_id, type, detail_id, extra_id, extra_type) {
            var selector = '[id^="handleCheck_' + extra_id + '_' + detail_id + '"]';

            //$(selector).removeClass('selected');

            // Check if elements with the selector have the class "selected"
            if ($(selector).hasClass('selected')) {
                $('#extra_' + extra_id + '_' + detail_id).css('color', '#000');
                $('#trash_' + extra_id + '_' + detail_id).css('display', 'none');
                $('#handleCheck_' + extra_id + '_' + detail_id).removeClass('selected');
                $.ajax({
                    url: "{{ route('item.remove.extra') }}",
                    type: 'GET',
                    data: {
                        type: type,
                        extra_detail_id: detail_id,
                        item_id: item_id,
                        extra_id: extra_id,
                        extra_type: extra_type
                    },
                    success: function(response) {
                        $('#item_order_total').html(response.item_total.toFixed(2));
                        var header_total = '&pound;' + response.total.toFixed(2) + ' / ' + response
                            .total_items + ' ' + response.item_label;

                        $('#header_total').html(header_total);




                        console.log('extra removed');
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                if (extra_type == 1) {
                    $('[id^="extra_' + extra_id + '_"]').css('color', '#000');
                    $('[id^="trash_' + extra_id + '_"]').css('display', 'none');

                    $('[id^="handleCheck_' + extra_id + '_"]').removeClass('selected');

                }
                $('#extra_' + extra_id + '_' + detail_id).css('color', '#FFD715');
                $('#trash_' + extra_id + '_' + detail_id).css('display', 'inline-block');
                $('#handleCheck_' + extra_id + '_' + detail_id).addClass('selected');
                $('#handleCheck_' + extra_id + '_' + detail_id).css('background', "none");
                $.ajax({
                    url: "{{ route('item.add.extra') }}",
                    type: 'GET',
                    data: {
                        type: type,
                        extra_detail_id: detail_id,
                        item_id: item_id,
                        extra_id: extra_id,
                        extra_type: extra_type
                    },
                    success: function(response) {
                        $('#item_order_total').html(response.item_total.toFixed(2));
                        var header_total = '&pound;' + response.total.toFixed(2) + ' / ' + response
                            .total_items + ' ' + response.item_label;

                        $('#header_total').html(header_total);



                        console.log('extra added');
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            }

        }


        function inc_qty(item_id) {
            let qty = $("#qty-input-" + item_id)[0];


            $("#qty-input-" + item_id)[0].value = (+qty.value + 1);

        }

        function dec_qty(item_id) {
            let qty = $("#qty-input-" + item_id)[0];


            if (qty.value > "1") {
                $("#qty-input-" + item_id)[0].value = (+qty.value - 1);
            }

        }


        function add_to_order(item_id) {
            let qty = $("#qty-input-" + item_id)[0].value;
            $.ajax({
                url: "{{ route('item.add.to.order') }}",
                type: 'GET',
                data: {
                    item_id: item_id,
                    qty: qty
                },
                success: function(response) {
                    $('#item_order_total').html(response.item_total.toFixed(2));
                    var header_total = '&pound;' + response.total.toFixed(2) + ' / ' + response.total_items +
                        ' ' + response.item_label;

                    $('#header_total').html(header_total);
                    $('#modal' + item_id).css('display', 'none');
                    $('.modal-backdrop').css('display', 'none');
                    window.location.reload();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>
@endsection
