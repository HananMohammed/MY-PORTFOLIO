<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Educo"/>
    <meta name="keywords" content="Educo, html template, Education template" />
    <meta name="author" content="Kamleshyadav"/>
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>El-Ostora|@yield('title')</title>
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <!-- Template CSS -->--}}
    <link rel="stylesheet" href="{{asset_public('front/assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="{{asset_public('front/assets/css/style.css')}}">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{asset_public('front/assets/images/header/favicon.png')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    @yield('style')
    @if(app()->getLocale()=='ar')
    <!-- Latest compiled and minified CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
        <link
            rel="stylesheet"
            href="{{asset_public('front/assets/css/style_rtl.css')}}" />
    @endif

<!--Chat Section-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--Floating WhatsApp css-->
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <!--Floating WhatsApp javascript-->
    <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
</head>
<body>
<div id="WAButton" style="z-index: 30;right: 60px!important;"></div>
<!--Page main section start-->
@yield('content')
@include('front.layouts.includes.footer')
<!-- /move top -->
<!--main js file start-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- move top -->
<script>
    $(function() {
        $('#WAButton').floatingWhatsApp({
            phone: '+201090919435', //WhatsApp Business phone number International format-
            //Get it with Toky at https://toky.co/en/features/whatsapp.
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "right"
        });
    });

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!--/login-->
<script>
    //Login
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle();
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
    //Register
    // $(document).ready(function () {
    //     $(".button-log1 a").click(function () {
    //         $(".overlay-login1").fadeToggle(200);
    //         $(this).toggleClass('btn-open1').toggleClass('btn-close');
    //     });
    // });
    $('.register-close').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".overlay-login1").fadeToggle(200);
    });
    $('.overlay-close2').on('click', function () {
        $(".overlay-login1").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!--//login-->
<script>
    // optional
    $('#customerhnyCarousel').carousel({
        interval: 5000
    });
</script>
<!-- cart-js -->
{{--<script src="{{asset_public('front/assets/js/minicart.js')}}"></script>--}}
{{--<script>--}}
{{--    transmitv.render();--}}

{{--    transmitv.cart.on('transmitv_checkout', function (evt) {--}}
{{--        var items, len, i;--}}

{{--        if (this.subtotal() > 0) {--}}
{{--            items = this.items();--}}

{{--            for (i = 0, len = items.length; i < len; i++) {}--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}
<!-- //cart-js -->
<!--pop-up-box-->
<script src="{{asset_public('front/assets/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="{{asset_public('front/assets/js/bootstrap.min.js')}}"></script>

@yield('scripts')
<!--main js file end-->
</body>
</html>
