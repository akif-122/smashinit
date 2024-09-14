@extends('frontend.layouts.master')

<style>
    body {
        background-color: #151515 !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Poppins", sans-serif !important;

    }
    .scrollToTop{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .vs-about-layout4 .vs-3dcarousel .slick-current img{
        border-color: #FFD715 !important;
    }

    .breadcumb-wrapper {
        position: relative;
        height: 600px;
        overflow: hidden;
    }

    .breadcumb-wrapper iframe {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 150%;
        height: 150%;
        pointer-events: none;
    }

    @media (max-width: 991px) {
        .breadcumb-wrapper {
            height: 550px;
        }
    }

    @media (max-width: 767px) {
        .breadcumb-wrapper {
            height: 450px;
        }
    }

    @media (max-width: 575px) {
        .breadcumb-wrapper {
            height: 350px;
        }
    }

    @media (max-width: 425px) {
        .breadcumb-wrapper {
            height: 250px;
        }
    }

    h1 {
        font-family: "Poppins", sans-serif;
    }

    .text-theme {
        color: #ffd715;
    }

    .breadcumb-menu-style1 li a:hover {
        color: #ffd715;
    }

    .service-icon {
        color: #FFD715;
    }

    .vs-team-wrapper h2,
    .vs-team-wrapper p,
    .vs-about-wrapper .about-text,
    .vs-about-wrapper .sec-title1 {
        color: #fff;
        font-family: "Poppins", sans-serif;

    }

    .vs-about-wrapper p {
        opacity: .8;
    }

    .vs-about-wrapper .text-theme {
        opacity: 1;
    }

    .vs-3dcarousel {
        height: 600px !important;
    }

    .vs-service {
        background-color: #000;
    }

    .vs-service .service-title {
        color: #fefefe;
    }

    .testimonial-author-name {
        color: #fff !important;
    }

    .testimonial-author-box1 {
        background: #000 !important;
    }

    .slick-dots {
        display: none !important;
    }

    @media (max-width: 767px) {
        .vs-3dcarousel {
            height: 350px !important;
        }

    }

    @media (max-width: 450px) {
        .vs-3dcarousel {
            height: 260px !important;
        }
    }
</style>

@section('content')

<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 link-inherit  mb-30">
    <iframe class="bg-video" width="100%"
        src="https://www.youtube.com/embed/d8kM-iVr8kA?si=H2KH7kXAgpyOyAw2&amp;controls=0&autoplay=1&loop=1&mute=1"></iframe>
    <!-- <div class="container z-index-common">
        <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
            <h1 class="breadcumb-title sec-title1 text-white my-0">About Us</h1>
            <ul class="breadcumb-menu-style1 bg-white">
                <li><a href="{{route('home')}}"><i class="fal fa-home text-theme"></i>Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div> -->
</div>

<!--==============================
      About Area
    ==============================-->
<section class="vs-about-wrapper vs-about-layout4 py-lg-150  pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                    <p class="h3 text-theme text-font3 mb-10">Our Brave</p>
                    <h2 class="sec-title1">About Us</h2>
                    <p class="about-text">Compellingly engage backend technology and 2.0 strategic theme areas.
                        Distinctively simplify world-class portals through global human capital. Holisticly expedite
                        multimedia based materials and end-to-end architectures. Continually expedite magnetic synergy
                        without front-end benefits. Credibly orchestrate premium alignments through real-time
                        alignments.</p>
                    <div class="vs-carousel vs-3dcarousel pt-lg-15 pb-30 pb-lg-40" data-slidetoshow="1"
                        data-variablewidth="true" data-loop="false">
                        <div>
                            <!-- <img src="/frontend/assets/img/about/about-slide-1-1.jpg" alt="About Image"> -->
                            <img src="/frontend/assets/img/about/about-slide-1-1.jpg" alt="About Image">
                        </div>
                        <div>
                            <img src="/frontend/assets/img/about/about-slide-1-2.jpg" alt="About Image">
                        </div>
                        <div>
                            <img src="/frontend/assets/img/about/about-slide-1-3.jpg" alt="About Image">
                        </div>
                        <div>
                            <img src="/frontend/assets/img/about/about-slide-1-4.jpg" alt="About Image">
                        </div>
                        <div>
                            <img src="/frontend/assets/img/about/about-slide-1-5.jpg" alt="About Image">
                        </div>
                        <div>
                            <img src="/frontend/assets/img/about/about-slide-1-6.jpg" alt="About Image">
                        </div>
                    </div>
                    <p class="about-text">Synergistically envisioneer client-centered functionalities for go forward
                        data. Progressively productivate transparent outsourcing for exceptional synergy. Progressively
                        maximize front-end action items and focused interfaces.infrastructures through superior
                        intellectual capital. Appropriately reinvent principle-centered resources whereas cross-platform
                        niche markets.Compellingly engage backend technology and 2.0 strategic theme areas.
                        Distinctively simplify world-class portals through global human capital. Holisticly expedite
                        multimedia based materials and end-to-end architectures. Continually expedite magnetic synergy
                        without front-end benefits. Credibly orchestrate premium alignments through real-time
                        alignments.</p>
                    <!--==============================
                            Service Area
                        ==============================-->
                    <div class="vs-service-wrapper vs-service-layout2 pt-10 pt-lg-60">
                        <div class="row arrow-has-margin vs-carousel pb-lg-50" data-slidetoshow="3" data-dots="true"
                            data-xldots="true" data-mldots="true" data-lgdots="true" data-mdslidetoshow="2"
                            data-smslidetoshow="2" data-xsslidetoshow="1">
                            <div class="col-xl-4">
                                <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                    <span class="service-icon text-theme d-block mb-30"><i
                                            class="flaticon-fork icon-3x"></i></span>
                                    <h3 class="service-title link-inherit mb-10">Catering</h3>
                                    <p class="service-text mb-0">Synergistically envisioneer client centered
                                        functionalities for go forward data world.</p>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                    <span class="service-icon text-theme d-block mb-30"><i
                                            class="flaticon-serving-dish icon-3x"></i></span>
                                    <h3 class="service-title link-inherit mb-10">Dinner</h3>
                                    <p class="service-text mb-0">Synergistically envisioneer client centered
                                        functionalities for go forward data world.</p>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                    <span class="service-icon text-theme d-block mb-30"><i
                                            class="flaticon-flag icon-3x"></i></span>
                                    <h3 class="service-title link-inherit mb-10">Wedding</h3>
                                    <p class="service-text mb-0">Synergistically envisioneer client centered
                                        functionalities for go forward data world.</p>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                    <span class="service-icon text-theme d-block mb-30"><i
                                            class="flaticon-confetti icon-3x"></i></span>
                                    <h3 class="service-title link-inherit mb-10">Birthday</h3>
                                    <p class="service-text mb-0">Synergistically envisioneer client centered
                                        functionalities for go forward data world.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
     Testimonial Area
    ==============================-->
<section class="vs-testimonial-wrapper vs-testimonial-layout2 background-image bg-auto bg-fixed mb-70 mb-lg-80"
    data-overlay="dark" data-opacity="8" data-vs-img="/frontend/assets/img/about/testimonial-bg-2-1.jpg"
    id="testimonial">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="testimonial-text-area text-center py-lg-150 pt-60 pb-80 vs-carousel"
                    id="testimonial-text-slide" data-asnavfor="#testimonial-name-slide, #testimonial-avater-slide"
                    data-slidetoshow="1" data-fade='true'>
                    <div class="testimonial-text-slide">
                        <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                        <p class="testimonial-text text-white text-20">“ Progressively strategize compelling metrics
                            whereas impactful architectures. Rapidiously fabricate multifunctional customer service
                            without proactive syne
                            rgy. Completely incentivize covalent customer service rather ”</p>
                    </div>
                    <div class="testimonial-text-slide">
                        <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                        <p class="testimonial-text text-white text-20">“ Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Alias et asperiores, rem saepe exercitationem itaque autem deleniti ad
                            sint quia ut tenetur quo distinctio rerum, temporibus a, atque molestiae in fuga quam
                            voluptate ”</p>
                    </div>
                    <div class="testimonial-text-slide">
                        <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                        <p class="testimonial-text text-white text-20">“ nisi quod corrupti consequuntur itaque, quia,
                            fuga laudantium fugit necessitatibus accusantium vitae dicta architecto iure pariatur nihil
                            quidem sapiente reiciendis praesentium aspernatur vel beatae minima? Harum ”</p>
                    </div>
                    <div class="testimonial-text-slide">
                        <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                        <p class="testimonial-text text-white text-20">“ modi, corrupti, quisquam ea repellendus tenetur
                            sunt harum sit cum facere. Accusantium, perspiciatis iusto ipsa cum, aspernatur repellendus
                            dignissimos maxime culpa molestias sunt natus consequuntur quisquam, ad sint ”</p>
                    </div>
                    <div class="testimonial-text-slide">
                        <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                        <p class="testimonial-text text-white text-20">“ quo odio dolores reprehenderit! Neque, harum
                            veniam quasi adipisci nobis repudiandae hic voluptatum provident velit assumenda blanditiis
                            quae quia, iste eius. Excepturi nulla ea aspernatur, odit ipsam provident ”</p>
                    </div>
                    <div class="testimonial-text-slide">
                        <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                        <p class="testimonial-text text-white text-20">“ cum odio pariatur. Aperiam voluptatem harum
                            vitae, cupiditate ducimus, consequuntur accusantium minima incidunt dolorem et enim corporis
                            doloribus error adipisci temporibus quaerat possimus laudantium atque. ”</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 position-relative">
                <div class="testimonial-author-box1 vs-carousel bg-white position-absolute radius-10 px-15 px-md-40 px-lg-80 pt-40 pt-lg-50 pb-40 pb-lg-45"
                    id="testimonial-name-slide" data-asnavfor="#testimonial-text-slide, #testimonial-avater-slide"
                    data-slidetoshow="1" data-arrows="true" data-xlarrows="true" data-mlarrows="true"
                    data-lgarrows="true" data-mdarrows="true" data-smarrows="true" data-xsarrows="true"
                    data-fade="true">
                    <div>
                        <h2 class="h3 testimonial-author-name mb-0">Algernon Freddy</h2>
                        <strong class="testimonial-author-degi text-theme">Managing Director</strong>
                    </div>
                    <div>
                        <h2 class="h3 testimonial-author-name mb-0">Jamaica Roise</h2>
                        <strong class="testimonial-author-degi text-theme">Managing Director</strong>
                    </div>
                    <div>
                        <h2 class="h3 testimonial-author-name mb-0">Vivi Marian</h2>
                        <strong class="testimonial-author-degi text-theme">Founder</strong>
                    </div>
                    <div>
                        <h2 class="h3 testimonial-author-name mb-0">Marko Polo</h2>
                        <strong class="testimonial-author-degi text-theme">Chef Leader</strong>
                    </div>
                    <div>
                        <h2 class="h3 testimonial-author-name mb-0">Jerzzy Lamot</h2>
                        <strong class="testimonial-author-degi text-theme">Board Member</strong>
                    </div>
                    <div>
                        <h2 class="h3 testimonial-author-name mb-0">Tahera Raj</h2>
                        <strong class="testimonial-author-degi text-theme">Board Member</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-author-image1 d-none d-xl-block testi-author-image-layout1 vs-carousel"
        id="testimonial-avater-slide" data-asnavfor="#testimonial-text-slide, #testimonial-name-slide"
        data-slidetoshow="6" data-autoheight="true" data-variablewidth="true">
        <div class="testimonial-author-image">
            <img src="assets/img/testimonial/testimonial-author-2-1.jpg" alt="Testimonial Author Image">
        </div>
        <div class="testimonial-author-image">
            <img src="{{asset('frontend/assets/img/testimonial/testimonial-author-2-2.jpg')}}"
                alt="Testimonial Author Image">
        </div>
        <div class="testimonial-author-image">
            <img src="frontend/assets/img/testimonial/testimonial-author-2-3.jpg" alt="Testimonial Author Image">
        </div>
        <div class="testimonial-author-image">
            <img src="frontend/assets/img/testimonial/testimonial-author-2-4.jpg" alt="Testimonial Author Image">
        </div>
        <div class="testimonial-author-image">
            <img src="frontend/assets/img/testimonial/testimonial-author-2-5.jpg" alt="Testimonial Author Image">
        </div>
        <div class="testimonial-author-image">
            <img src="frontend/assets/img/testimonial/testimonial-author-2-6.jpg" alt="Testimonial Author Image">
        </div>
        <div class="testimonial-author-image">
            <img src="frontend/assets/img/testimonial/testimonial-author-2-1.jpg" alt="Testimonial Author Image">
        </div>
    </div>
</section>
<!--==============================
      Team Area
    ==============================-->
<!-- <section class="vs-team-wrapper vs-team-layout1 link-inherit pt-lg-150 pt-60 pb-lg-120 pb-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-9 col-xl-7">
                    <div class="section-title text-center ">
                        <span class="sec-subtitle text-theme h3">Meet Our</span>
                        <h2 class="sec-title1">Expert Team</h2>
                        <p class="sec-text text-md">Assertively myocardinate robust e-tailers for extensible human capital.
                            dpropriately benchmark <a href="#" class="text-theme">turnkey</a> networks.</p>
                        <div class="sec-line">
                            <img src="assets/img/shape/sec-title-1.png" alt="Section Shape Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel arrow-has-margin" data-centermode="true" data-arrows="true" data-initialslide="1" data-slidetoshow="3" data-mdslidetoshow="2" data-smslidetoshow="2" data-xsslidetoshow="1">
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-team">
                        <div class="team-img image-scale-hover">
                            <a href="chef-details.html"><img src="assets/img/team/team-img-1-1.jpg" alt="Team Image"></a>
                        </div>
                        <div class="team-content">
                            <span class="vs-box1 overlay"></span>
                            <h3 class="team-member-name mb-0"><a href="chef-details.html">Mark Polo</a></h3>
                            <span class="team-member-degi">CEO</span>
                            <div class="social-links links-has-border pt-15">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-team">
                        <div class="team-img image-scale-hover">
                            <a href="chef-details.html"><img src="assets/img/team/team-img-1-2.jpg" alt="Team Image"></a>
                        </div>
                        <div class="team-content">
                            <span class="vs-box1 overlay"></span>
                            <h3 class="team-member-name mb-0"><a href="chef-details.html">Vivi Marian</a></h3>
                            <span class="team-member-degi">Founder</span>
                            <div class="social-links links-has-border pt-15">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-team">
                        <div class="team-img image-scale-hover">
                            <a href="chef-details.html"><img src="assets/img/team/team-img-1-3.jpg" alt="Team Image"></a>
                        </div>
                        <div class="team-content">
                            <span class="vs-box1 overlay"></span>
                            <h3 class="team-member-name mb-0"><a href="chef-details.html">Zerzzy Lamot</a></h3>
                            <span class="team-member-degi">Chief</span>
                            <div class="social-links links-has-border pt-15">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-team">
                        <div class="team-img image-scale-hover">
                            <a href="chef-details.html"><img src="assets/img/team/team-img-1-4.jpg" alt="Team Image"></a>
                        </div>
                        <div class="team-content">
                            <span class="vs-box1 overlay"></span>
                            <h3 class="team-member-name mb-0"><a href="chef-details.html">Peter Parker</a></h3>
                            <span class="team-member-degi">Worker</span>
                            <div class="social-links links-has-border pt-15">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-team">
                        <div class="team-img image-scale-hover">
                            <a href="chef-details.html"><img src="assets/img/team/team-img-1-5.jpg" alt="Team Image"></a>
                        </div>
                        <div class="team-content">
                            <span class="vs-box1 overlay"></span>
                            <h3 class="team-member-name mb-0"><a href="chef-details.html">Suzana Roise</a></h3>
                            <span class="team-member-degi">Worker</span>
                            <div class="social-links links-has-border pt-15">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-team">
                        <div class="team-img image-scale-hover">
                            <a href="chef-details.html"><img src="assets/img/team/team-img-1-6.jpg" alt="Team Image"></a>
                        </div>
                        <div class="team-content">
                            <span class="vs-box1 overlay"></span>
                            <h3 class="team-member-name mb-0"><a href="chef-details.html">Mohn Deo</a></h3>
                            <span class="team-member-degi">Worker</span>
                            <div class="social-links links-has-border pt-15">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section> -->




@endsection