<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kezdőoldal</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/dist/assets/owl.carousel.min.css') }}">
</head>

<body>
<div class="container-fluid container--grey">
    <div class="container social-box">
        <a href="https://www.facebook.com/Edzesbogival/" target="_blank">
            <i class="fab fa-facebook-f social-box__item social-box__item--facebook"></i>
        </a>
        <a href="https://www.instagram.com/bogiszendi_fitness/" target="_blank">
            <i class="fab fa-instagram social-box__item social-box__item--instagram"></i>
        </a>
    </div>
</div>

<div class="container-fluid">
    <div class="container navigation">
        <div class="logo">
            <img src="/images/logo.jpg" alt="">
        </div>
        <div class="contact">
            <p><i class="phone-icon fas fa-phone"></i> Telefon: +36 70 89 45 678</p>
        </div>
        <div class="nav">
            <ul class="navigation-list">
                <li><a href="/">Kezdőoldal</a></li>
                <li><a href="/rolam">Rólam</a></li>
                <li><a href="/orak">Órák</a></li>
                <li><a href="/kontakt">Kontakt</a></li>
                <li><a href="/arak">Árak</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid container-fluid--max-width">
    <div class="owl-carousel owl-theme">
        <div class="owl-carousel__item"><img src="/images/slider/slider_1.jpg" alt="The Last of us"></div>
        <div class="owl-carousel__item"><img src="/images/slider/slider_2.jpg" alt="GTA V"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="container main-page-button-container">
        <a class="main-page-button-container__link" href="/gerinctorna-nyujtassal">Gerinctorna nyújtással</a>
        <a class="main-page-button-container__link" href="/erosites-es-nyujtas">Erősítés és Nyújtás</a>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('plugins/owl-carousel/dist/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        let owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:0,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    });
</script>
</body>

</html>