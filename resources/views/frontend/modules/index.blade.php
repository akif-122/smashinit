@extends('frontend.layouts.master')


@section('content')

<!-- GOBOLD FONT -->
<link href="https://fonts.cdnfonts.com/css/gobold?styles=26043,26021,26029" rel="stylesheet">



<!-- OWL CAROUSEL CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

<style>
/* POPPINS FONST  */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*,
html {
    font-family: "Poppins", sans-serif;
}

body {
    font-family: "Poppins", sans-serif;
}

.wrapper {
    overflow: hidden;
}

body {
    background-color: #E0E0E0;
    overflow-x: hidden;
}

.overlay {
    position: relative;
    isolation: isolate;
}

.overlay:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    transition: .5s ease;
    z-index: -1;
}

.hero-section {
    width: 100%;
}

/* OUR MENU SECTION */
.our-menu-section {
    margin: 50px 0;
    padding: 0 10px;
}

.our-menu-section .our-menu {
    background-color: #0E111A;
    border-radius: 15px;
    padding: 15px 0;
    padding-left: 40px;

}

.our-menu-section .our-menu h2 {
    font-size: 70px;
    font-weight: 700;
    color: #FFD715;
    font-family: 'Gobold Bold', sans-serif;

}

.our-menu-section .our-menu p {
    color: #ddd;
    font-size: 18px;

}

.our-menu-section .our-menu a {
    max-width: 300px;
    display: block;
    padding: 10px 30px;
    border: 1px solid #FFD715;
    border-radius: 5px;
    text-align: center;
    font-size: 22px;
    font-weight: 500;
}

.our-menu-section .our-menu a:hover {
    color: #0E111A;
    background-color: #FFD715;
}

@media screen and (max-width: 991px) {
    .our-menu-section .our-menu h2 {
        font-size: 50px;
        font-weight: 800;
    }
}

@media screen and (max-width: 575px) {
    .our-menu-section .our-menu {
        padding: 15px 10px;
        padding-top: 25px;


    }

    .our-menu-section .our-menu h2 {
        font-size: 35px;
    }

    .our-menu-section .our-menu a {
        font-size: 18px;
    }

}

/* OUR MENU SECTION END */

/* CARD SECTION START */
.card-section {
    padding: 0 10px;
}

.card-section .box-card {
    background: url("{{asset('frontend/assets/img/home/story-bg.jpg')}}");
    background-position: center;
    background-size: cover;
    border-radius: 15px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 300px;
    transition: .5s ease;
    position: relative;
    isolation: isolate;
}

.card-section .box-card.box-card1::after {
    background: rgba(0, 0, 0, 0.8);
}

.time-detail {
    background-color: transparent;
    width: calc(100% - 50px);
    padding: 10px;
}

.time-detail h5 {
    font-size: 20px;
    margin: 0;
    padding: 0;
    text-align: center;
    font-weight: 600;
    color: #fefefe;
    font-family: "Poppins", sans-serif;

}

.time-detail h4 {
    font-size: 28px;
    text-align: center;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    color: #FFD715;
    margin-bottom: 25px;
    position: relative;

}

.time-detail h4:after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 100px;
    border-bottom: 1px solid #FFD715;
}

.time-detail .hours .day {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 5px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.time-detail .hours .day p {
    margin: 0;
    /* color: rgba(255, 255, 255, 0.8); */
    color: #FFD715;
}

.time-detail .hours .day.active {
    background-color: #E0E0E0;
}

.time-detail .hours .day.active p {
    color: #151515;
}


.card-section .box-card h3 {
    font-size: 45px;
    color: #FFD715;
    font-family: "Poppins", sans-serif;
    font-weight: 700;
    max-width: 450px;
    text-align: center;
}

.card-section .box-card2 {
    background: url("{{asset('frontend/assets/img/home/location-bg.jpg')}}");
    background-position: center;
    background-size: cover;
}

.card-section .box-card:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    border-radius: 15px;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    transition: .5s ease;
    z-index: -1;
}

.card-section .box-card:hover:after {
    background: rgba(0, 0, 0, 0.8);

}

.card-section .box-card img {
    max-width: 235px;
}

@media screen and (max-width: 991px) {
    .card-section .box-card {
        height: 200px;

    }

    .card-section .box-card img {
        max-width: 180px;
    }


    .card-section .box-card h3 {
        font-size: 34px;
    }

}


@media screen and (max-width: 575px) {
    .card-section .box-card h3 {
        font-size: 30px;
    }


    .time-detail {
        width: calc(100% - 20px);
    }

    .time-detail h4 {
        font-size: 22px;

    }

}



/* CARD SECTION END */

/* FRACHISE SECTION START */
.franchise-section {
    padding: 130px 10px;
    background-image: url("{{asset('frontend/assets/img/home/location-bg.jpg')}}");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.franchise-section h2 {
    font-size: 70px;
    font-weight: 700;
    color: #fff;
    font-family: "Poppins", sans-serif;

}

.franchise-section h2 span {
    color: #FFD715;
}

.franchise-section p {
    color: #fefefe;
    font-size: 18px;
    max-width: 775px;
    margin: 0 auto;
    line-height: 1.4;
    text-align: justify;

}

.franchise-section a {
    max-width: 300px;
    display: block;
    padding: 10px 30px;
    border: 1px solid #FFD715;
    border-radius: 5px;
    text-align: center;
    font-size: 22px;
    font-weight: 500;
    margin: 30px auto;
}

.franchise-section a:hover {
    color: #0E111A;
    background-color: #FFD715;
}

@media screen and (max-width: 991px) {
    .franchise-section h2 {
        font-size: 60px;
    }
}

@media screen and (max-width: 575px) {
    .franchise-section h2 {
        font-size: 35px;
    }

    .franchise-section p {
        font-size: 16px;

    }

    .franchise-section a {
        max-width: 250px;
        font-size: 20px;
    }

}

/* FRACHISE SECTION END */


/* ABOUT SECTION START */
.about-section {
    margin-top: 0px;
    background-image: url("{{asset('frontend/assets/img/home/about-bg.jpg')}}");

}

/* ABOUT SECTION END */

/* JOIN SECTION START */
.join-section {
    padding: 100px 0;
    background: #0E111A;
}

.join-section .join-text {
    max-width: 450px;
    margin-bottom: 30px;
}

.join-section .join-text h4 {
    font-family: "Poppins", sans-serif;
    font-size: 34px;
    font-weight: 600;
    color: #fefefe;
    text-transform: uppercase;
    margin-bottom: 0;
}

.join-section .join-text h2 {
    font-size: 68px;
    font-weight: 700;
    color: #FFD715;
    font-family: "Poppins", sans-serif;
}

.join-section .join-text img {
    margin-bottom: 10px;
}

.join-section .join-text p {
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 30px;
    line-height: 1.4;
    color: rgba(255, 255, 255, 0.8);
}

.join-section .join-text a {
    max-width: 200px;
    display: block;
    padding: 10px 30px;
    color: #FFD715;
    border: 1px solid #FFD715;
    border-radius: 5px;
    text-align: center;
    font-size: 20px;
    font-weight: 600;
    margin: 20px 0;
}

.join-section .join-text a:hover {
    color: #0E111A;
    background-color: #FFD715;
    border-color: #FFD715;
}


.join-section .join-img img {
    border-radius: 15px;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media screen and (max-width: 991px) {
    .join-section .join-text h4 {
        font-family: "Poppins", sans-serif;
        font-size: 28px;
    }

    .join-section .join-text h2 {
        font-size: 50px;
    }
}

@media screen and (max-width: 991px) {


    .join-section .join-text h2 {
        font-size: 40px;
    }
}


/* JOIN SECTION END  */
</style>
<div class="wrapper">
    <!--==============================
        Hero Area
    ==============================-->

    <section class="hero-section">
        <div class="hero-slide owl-carousel owl-theme">
            <div class="item">
                <div class="banner-img">
                    <img src="{{asset('frontend/assets/img/home/banner1.jpg')}}" alt="Banner ">
                </div>
            </div>

            <div class="item">
                <div class="banner-img">
                    <img src="{{asset('frontend/assets/img/home/banner2.jpg')}}" alt="">
                </div>
            </div>

            <div class="item">
                <div class="banner-img">
                    <img src="{{asset('frontend/assets/img/home/banner3.jpg')}}" alt="Banner">
                </div>
            </div>

        </div>
    </section>
    <!-- HERO SECTION END -->



    <!-- OUR MENU SECTION START -->
    <section class="our-menu-section">
        <div class="container">
            <div class="our-menu row align-items-center">
                <div class="col-md-5 col-lg-4 mb-5">
                    <h2>OUR MENU</h2>
                    <p>Choose from our wide range selection, best in town</p>
                    <div class="menu-link">
                        <a href="{{route('shop')}}">Order Online</a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="our-menu-img">
                        <img src="{{asset('frontend/assets/img/home/our-menu.png')}}" alt="Image">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR MENU SECTION END -->

    <!-- CARD SECTION -->
    <section class="card-section">
        <div class="container px-0">
            <div class="row">

                <div class="col-md-6 mb-5">
                    <!-- <a href="{{route('about')}}"> -->

                    <div class=" box-card box-card1">
                        <!-- <img src="{{asset('frontend/assets/img/home/story.png')}}" alt="Image"> -->
                        <div class=" time-detail">

                         <!-- <h5>HERE'S OUR</h5> -->
                            <h4>OPENING HOURS</h4>
                            
                            <div class="hours">

                                <div class="day {{ ($currentDay == "Monday") ? "active" : "" }}">
                                    <p>Monday</p>
                                    <p>16:30-23:00</p>
                                </div>

                                <div class="day {{ ($currentDay == "Tuesday") ? "active" : "" }}">
                                    <p>Tuesday</p>
                                    <p>16:30-23:00</p>
                                </div>

                                <div class="day {{ ($currentDay == "Wednesday") ? "active" : "" }}">
                                    <p>Wednesday</p>
                                    <p>16:30-23:00</p>
                                </div>

                                <div class="day {{ ($currentDay == "Thursday") ? "active" : "" }}">
                                    <p>Thursday</p>
                                    <p>16:30-23:00</p>
                                </div>

                                <div class="day {{ ($currentDay == "Friday") ? "active" : "" }}">
                                    <p>Friday</p>
                                    <p>16:30-23:00</p>
                                </div>

                                <div class="day {{ ($currentDay == "Saturday") ? "active" : "" }}">
                                    <p>Saturday</p>
                                    <p>16:30-23:00</p>
                                </div>

                                <div class="day {{ ($currentDay == "Sunday") ? "active" : "" }}">
                                    <p>Sunday</p>
                                    <p>16:30-23:00</p>
                                </div>


                            </div>

                        </div>

                    </div>
                    <!-- </a> -->

                </div>

                <div class="col-md-6 mb-5 ">
                    <a href="{{route('gallery')}}">

                    <div class="box-card box-card2 h-100">
                        <!-- <img src="{{asset('frontend/assets/img/home/location.png')}}" alt="Image"> -->
                        <h3>The SMASH 'IN' IT <br /> Location</h3>
                    </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- CARD SECTION END -->

    <!-- FRACHISE SECTION START -->
    <!-- <section class="franchise-section overlay">
        <div class="container">
            <div class="franchise-text text-center">
                <h2><span>FRANCHISE</span> <br /> OPPORTUNITIES</h2>
                <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                    to become part of our network. We support our franchise partners with a programme tailor-made to
                    answer your every need. From store location, design and fitting to staff training and sales plans.
                </p>

                <a href="/about">
                    Learn More
                </a>
            </div>
        </div>
    </section> -->
    <!-- FRACHISE SECTION END -->

    <!-- JOIN SECTION START -->
    <div class="join-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="join-text">
                        <!-- <img src="{{asset('frontend/assets/img/home/join.png')}}" alt="Image"> -->
                        <h4>Join The</h4>
                        <h2>SMASH CLUB</h2>

                        <p>SMASH 'IN' IT members get early access to menu items, free merchandise and exclusive
                            discounts every month</p>

                        <a href="/user-login">JOIN NOW</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="join-img">
                        <img src="{{asset('frontend/assets/img/home/join-banner.webp')}}" alt="Image">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- JOIN SECTION END -->

    <!-- ABOUT SECTION START -->
    <!-- <section class="franchise-section about-section overlay">
        <div class="container">
            <div class="franchise-text text-center">
                <h2><span>ABOUT</span></h2>
                <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                    to become part of our network. We support our franchise partners with a programme tailor-made to
                    answer your every need. From store location, design and fitting to staff training and sales plans.
                </p>

                <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                    to become part of our network. We support our franchise partners with a programme tailor-made to
                    answer your every need. From store location, design and fitting to staff training and sales plans.
                </p> 

                <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                    to become part of our network. We support our franchise partners with a programme tailor-made to
                    answer your every need. From store location, design and fitting to staff training and sales plans.
                </p>

                <p>If you share our vision as well as our passion, we are looking for like minded individuals or teams
                    to become part of our network. We support our franchise partners with a programme tailor-made to
                    answer your every need. From store location, design and fitting to staff training and sales plans.
                </p>

                <a href="/about">
                    Learn More
                </a>
            </div>
        </div>
    </section> -->
    <!-- ABOUT SECTION END -->
</div>

<!-- JQUERY CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- OWL CAROUSEL JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$('.hero-slide').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 1000,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
</script>


@endsection