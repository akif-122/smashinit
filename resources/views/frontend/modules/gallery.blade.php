@extends('frontend.layouts.master')


@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #E0E0E0;
    font-family: "Poppins", sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Poppins", sans-serif !important;

}

.gallery-section {
    padding: 100px 0;
}

.gallery-section h3 {
    font-size: 26px;
    color: #0e111a;
    font-weight: 600;
    margin-bottom: 20px;
    
}

.gallery {
    margin-top: 50px;
    margin-bottom: 80px;
}

h1 {
    text-align: center;
    font-size: 42px;
    font-weight: 700;
    color: #0e111a;
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    color: #FFD715;
}

img {
    width: 100%;
}

.gallery-items .item {
    height: 300px;
}

.gallery-items .item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (max-width: 575px) {
    .gallery-items .item {
        height: 200px;
    }

    .gallery-section {
        padding: 40px 0;
    }

    .gallery {
        margin-bottom: 30px;
    }
}

.social-media .social-item {
    width: 100%;
    height: 250px;
}

.social-media .social-item iframe {
    width: 100%;
    height: 100%;
}
</style>
@endsection
@section('content')

<div class="gallery-section">
    <div class="container">
        <h1>Gallery</h1>
    </div>

    <div class="gallery">
        <h3 class="pl-3">Campaign</h3>

        <div class="gallery-items gallery-slide owl-carousel owl-theme">
            <div class="item">
                <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>

            <div class="item">
                <img src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>

            <div class="item">
                <img src="https://images.pexels.com/photos/327158/pexels-photo-327158.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>

            <div class="item">
                <img src="https://images.pexels.com/photos/2282532/pexels-photo-2282532.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>

            <div class="item">
                <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>

            <div class="item">
                <img src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>

            <div class="item">
                <img src="https://images.pexels.com/photos/327158/pexels-photo-327158.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>

            <div class="item">
                <img src="https://images.pexels.com/photos/2282532/pexels-photo-2282532.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="social-media">
            <h3>Social Media</h3>

            <div class="row">

                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="social-item">
                        <iframe src="https://www.youtube.com/embed/c8XQp5brszI?si=rxBN0yikLsVOhwmf"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="social-item">
                        <iframe src="https://www.youtube.com/embed/c8XQp5brszI?si=rxBN0yikLsVOhwmf"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="social-item">
                        <iframe src="https://www.youtube.com/embed/c8XQp5brszI?si=rxBN0yikLsVOhwmf"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="social-item">
                        <iframe src="https://www.youtube.com/embed/c8XQp5brszI?si=rxBN0yikLsVOhwmf"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="social-item">
                        <iframe src="https://www.youtube.com/embed/c8XQp5brszI?si=rxBN0yikLsVOhwmf"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="social-item">
                        <iframe src="https://www.youtube.com/embed/c8XQp5brszI?si=rxBN0yikLsVOhwmf"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$('.gallery-slide').owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    autoplayTimeout: 3000,
    loop: true,
    margin: 0,
    dragEndSpeed: 1000,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        },
        1199: {
            items: 5
        }
    }
})
</script>


@endsection

</html>